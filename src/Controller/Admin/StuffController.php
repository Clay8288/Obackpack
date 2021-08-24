<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StuffController extends AbstractController
{
    /**
     * @Route("/admin/stuff", name="admin_stuff")
     */
    public function index(): Response
    {
        return $this->render('admin/stuff/index.html.twig', [
            'controller_name' => 'StuffController',
        ]);
    }
}
