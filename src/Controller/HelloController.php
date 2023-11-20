<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route('/hello/{name?World}', name: 'app_hello_index', requirements: ['name' => '(?:\pL|[- ]?)+'])]
    public function index(string $name): JsonResponse
    {
        return $this->json([
            'message' => 'Hello '.$name,
            'path' => 'src/Controller/HelloController.php',
        ]);
    }
}
