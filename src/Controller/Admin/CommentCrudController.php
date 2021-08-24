<?php

namespace App\Controller\Admin;

use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CommentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comment::class;
    }

    /**
     * method of configuration for displaying the comment's list
     *
     * @param string $pageName
     * @return iterable
     */
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('content'),
            TextField::new('user.nickname')->hideOnForm(),
            TextField::new('post.title'),
            AssociationField::new('post'),
            AssociationField::new('user'),
            DateField::new('createdAt')->hideOnIndex()->hideOnForm(),
            DateField::new('publishedAt')->hideOnIndex()->hideOnForm(),
            DateField::new('updatedAt')->hideOnIndex()->hideOnForm(),  
        ];
    }

    /**
     * Method for displaying a comment's list by descending id order and customisation of User page
     *
     * @param Crud $crud
     * @return Crud
     */
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['id'=>'DESC'])
            ->setPageTitle('index','Commentaires')
            ->setPageTitle('detail','Détail d\'un Commentaire')
            ->setPageTitle('edit', 'Modification d\'un commentaire');
            
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
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->disable(Action::NEW);
    }

}
