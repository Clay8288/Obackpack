<?php

namespace App\Controller\Admin;

use App\Entity\Channel;
use App\Entity\User;
use App\Entity\Comment;
use App\Entity\Continent;
use App\Entity\Country;
use App\Entity\ForumSubject;
use App\Entity\Message;
use App\Entity\Post;
use App\Entity\ResetPasswordRequest;
use App\Entity\Response;
use App\Entity\Stuff;
use App\Entity\Weather;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response as Resp;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Resp
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('O Backpack');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateur', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Articles', 'fas fa-book', Post::class);
        yield MenuItem::linkToCrud('Commentaires', 'fas fa-comment', Comment::class);

        yield MenuItem::linkToCrud('Channel', 'fas fa-comment', Channel::class);
        yield MenuItem::linkToCrud('Message', 'fas fa-comment', Message::class);

        yield MenuItem::linkToCrud('Continents', 'fas fa-globe', Continent::class);
        yield MenuItem::linkToCrud('Pays', 'fas fa-flag', Country::class);
        yield MenuItem::linkToCrud('Météo', 'fas fa-flag', Weather::class);

        yield MenuItem::linkToCrud('Forum/Sujet', 'fas fa-list', ForumSubject::class);
        yield MenuItem::linkToCrud('Réponse Forum', 'fas fa-comment', Response::class);
        
        yield MenuItem::linkToCrud('Matériel', 'fas fa-suitcase', Stuff::class);

        yield MenuItem::linkToCrud('rest_password', 'fas fa-comment', ResetPasswordRequest::class);
    }
}
