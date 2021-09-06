<?php

namespace App\Controller;

use App\Entity\Hero;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MusicController extends AbstractController
{

private $entityManager;

public function __construct(EntityManagerInterface $entityManager) {

    $this->entityManager = $entityManager;

}

    /**
     * @Route("/music", name="music")
     */
    public function index(): Response
    {
        $hero = $this->entityManager->getRepository(Hero::class)->findAll();
        return $this->render('music/index.html.twig', [
            
            'hero' => $hero
        ]);
    }
}
