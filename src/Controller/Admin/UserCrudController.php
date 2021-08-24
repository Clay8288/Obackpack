<?php

namespace App\Controller\Admin;

use App\Entity\User;
use DateTime;
use DateTimeInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AvatarField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController

{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    /**
     * method of configuration for displaying the user's list
     *
     * @param string $pageName
     * @return iterable
     */
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            EmailField::new('email'),
            TextField::new('nickname'),
            TextField::new('lastname'),
            TextField::new('firstname'),
            ArrayField::new('roles'),
            TextField::new('password')->onlyOnForms(),
            TextField::new('country'),
            DateField::new('date_of_birth'),
            DateField::new('createdAt')->hideOnForm(),
            DateField::new('publishedAt')->hideOnIndex()->hideOnDetail()->hideOnForm(),
            DateField::new('updatedAt')->hideOnIndex()->hideOnForm(),
            AvatarField::new('picture'),
            BooleanField::new('is_verified'),
        ];
    }

    /**
     * Method to limit the administrator's actions
     *
     * @param Actions $actions
     * @return Actions
     */
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

    /**
     * Method for displaying a user's list by ascending id order and customisation of User pages 
     *
     * @param Crud $crud
     * @return Crud
     */
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['nickname'=>'ASC'])
            ->setPageTitle('index','Utilisateurs')
            ->setPageTitle('new','Ajout d\'un Utilisateur')
            ->setPageTitle('detail','Détail d\'un Utilisateur')
            ->setPageTitle('edit', 'Modification des Informations Utilisateur');
            
    }
    
}
