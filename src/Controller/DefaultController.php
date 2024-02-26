<?php

namespace MsSecurity\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'security_default_index')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new security controller!',
            'path' => 'apps/security/src/Controller/DefaultController.php',
        ]);
    }
}
