<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HealthController extends AbstractController
{
    #[Route('/health', name: 'health')]
    public function check(): JsonResponse
    {
        return new JsonResponse([
            'status' => 'ok',
            'timestamp' => time(),
        ]);
    }

    #[Route('/ping', name: 'ping')]
    public function ping(): Response
    {
        return new Response('pong', 200);
    }
}

