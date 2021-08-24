<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CountryController extends AbstractController
{
    /**
     * @Route("/admin/country", name="admin_country")
     */
    public function index(): Response
    {
        return $this->render('admin/country/index.html.twig', [
            'controller_name' => 'CountryController',
        ]);
    }
}
