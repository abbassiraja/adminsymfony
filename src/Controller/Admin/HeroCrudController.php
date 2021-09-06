<?php

namespace App\Controller\Admin;

use App\Entity\Hero;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HeroCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Hero::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new( 'titre'),
            TextField::new('soustitre'),
            ImageField::new('image')
             ->setBasePath('heros/')
             ->setUploadDir('public/heros')
             ->setUploadedFileNamePattern('[randomhash].[extension]')
        ];
    }
    
}
