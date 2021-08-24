<?php

namespace App\Controller\Admin;

use App\Entity\ForumSubject;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ForumSubjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ForumSubject::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
