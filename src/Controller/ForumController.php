<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use App\Repository\ForumSubjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ForumController extends AbstractController
{
    /**
     * @Route("/forum", name="forum")
     */
    public function index(ForumSubjectRepository $forums, ContinentRepository $continents): Response
    {
        //dd($continents->findAll());
        dd($forums->findAll());

        return $this->render('forum/index.html.twig', [
            'forums' => $forums->findAll(),
            'continents' => $continents->findAll()
        ]);
    }
}
