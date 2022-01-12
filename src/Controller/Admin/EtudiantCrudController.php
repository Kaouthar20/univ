<?php

namespace App\Controller\Admin;

use App\Entity\Etudiant;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EtudiantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Etudiant::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            NumberField::new('cne'),
            TextField::new('fullName'),
            AssociationField::new('groupe'),
            NumberField::new('Telephone'),
            TextField::new('Email'),



        ];
    }
}
