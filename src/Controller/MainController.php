<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main_index')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'index',
            'path' => 'src/Controller/MainController.php',
        ]);
    }

    #[Route('/contact', name: 'app_main_contact')]
    public function contact(): JsonResponse
    {
        return $this->json([
            'message' => 'contact',
            'path' => 'src/Controller/MainController.php',
        ]);
    }
}
