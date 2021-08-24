<?php


namespace App\Controller;


define ( 'HUB_URL' , 'http://localhost:3000/.well-known/mercure' );
define ( 'JWT' , 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJtZXJjdXJlIjp7InB1Ymxpc2giOlsiKiJdLCJzdWJzY3JpYmUiOlsiKiJdfX0.4DUMumRBcwown63lKUecQcFxGAr8Dg2vwpSuKfAoKcs' );

use App\Entity\Channel;
use App\Entity\Message;
use App\Repository\ChannelRepository;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Mercure\Hub;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Jwt\StaticTokenProvider;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\WebLink\Link;

class ChannelController extends AbstractController
{
    /**
     * @Route("/channel", name="channel")
     */
    public function getChannels(ChannelRepository $channel): Response
    {
        $channels = $channel->findAll();

        return $this->render('channel/index.html.twig', [
            'channels' => $channels ?? []
        ]);
    }

    /**
     * @Route("/chat/{id}", name="chat", methods={"GET"})
     */
    public function chat(Channel $channel, MessageRepository $message, Request $request): Response
    {
        $messages = $message->findBy([
            'channel' => $channel
        ], ['createdAt' => 'ASC']);

        $hubUrl = $this->getParameter('mercure.default_hub'); // Mercure automatically define this parameter
        //dd($hubUrl);
        $this->addLink($request, new Link('mercure', $hubUrl));


        return $this->render('channel/chat.html.twig', [
            'channel' => $channel,
            'messages' => $messages
        ]);
    }

    /**
     * @Route("/chat/{id}", name="message", methods={"POST"})
     */
    public function sendMessage(Request $request, ChannelRepository $channel, EntityManagerInterface $em, SerializerInterface $serializer, HubInterface $hub): JsonResponse
    {

        $data = \json_decode($request->getContent(), true);
        //dd($data); // On récupère les data postées et on les déserialize
        if (empty($content = $data['content'])) {
            throw new AccessDeniedHttpException('No data sent');
        }
        $channel = $channel->findOneBy([
            'id' => $data['channel'] // On cherche à savoir de quel channel provient le message
        ]);
        if (!$channel) {
            throw new AccessDeniedHttpException('Message have to be sent on a specific channel');
        }

        $message = new Message(); // Après validation, on crée le nouveau message
        $message->setContent($content);
        $message->setChannel($channel);
        $message->setUser($this->getUser());
        //dd($message);
        $em->persist($message);
        $em->flush(); // Sauvegarde du nouvel objet en DB

        $jsonMessage = $serializer->serialize($message, 'json', [
            'groups' => ['message'] // On serialize la réponse avant de la renvoyer
        ]);
        //dd($jsonMessage);

        $update = new Update('http://localhost/chat/'.$channel->getId(),
            $jsonMessage);
        //dd($update);

        $hub = new Hub(HUB_URL, new StaticTokenProvider(JWT));

        $id = $hub->publish($update);
        //dd($id);
        return new JsonResponse( // Enfin, on retourne la réponse
            $id,
            Response::HTTP_OK,
            [],
            true
        );
    }
}
