<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MyController extends AbstractController
{
    #[Route('/test', name: 'app_my')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', );
    }
}
