<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AtelierRepository; 
use App\Repository\HotelRepository;

class BaseController extends AbstractController
{
     #[Route('/accueil', name: 'app_base')]
    public function index(AtelierRepository $atelierRepository, HotelRepository $hotelRepository): Response
    {
        $ateliers = $atelierRepository->findAll();
        $hotels = $hotelRepository->findAll();

        return $this->render('Accueil.html.twig', [
            'ateliers' => $ateliers,
            'hotels' => $hotels,
        ]);
    }
    
}