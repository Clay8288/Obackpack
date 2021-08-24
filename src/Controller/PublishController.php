<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response ;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

final class PublishController extends AbstractController
{
    /**
     * @Route("/message", name="sendMessage", methods={"POST|GET"})
     */
    public function sendMessage(HubInterface $bus, Request $request): Response
    {
        $update = new Update('http://ec2-3-238-91-104.compute-1.amazonaws.com/message', json_encode([
            'message' => $request->request->get('message'),
        ]));
        $bus->publish($update);

        return $this->redirectToRoute('home');
    }
}