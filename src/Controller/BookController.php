<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/book')]
class BookController extends AbstractController
{
    #[Route('', name: 'app_book_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BookController.php',
        ]);
    }

    /**
     * Route("/{id}", name="app_book_show", requirements={"id": "\d+"})
     */
    #[Route('/{!id<\d+>?1}', name: 'app_book_show', methods: ['GET'])]
    public function show(int $id): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller! id : '.$id,
            'path' => 'src/Controller/BookController.php',
        ]);
    }
}
