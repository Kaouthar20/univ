<?php

namespace App\Controller\Admin;

use App\Entity\Groupe;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class GroupeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Groupe::class;
    }


    /*   public function configureFields(string $pageName): iterable
    {
        return [
            NumberField::new('cne'),
            TextField::new('fullName'),
            NumberField::new('Telephone'),
            TextField::new('Email'),
            TextField::new('groupName'),

        ];
    } */
}
