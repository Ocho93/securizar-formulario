<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AppHomeController extends AbstractController
{
    #[Route('/app/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('app_home/index.html.twig', [
            'controller_name' => 'AppHomeController',
        ]);
    }
}
