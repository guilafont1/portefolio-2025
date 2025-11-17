<?php

namespace App\Controller;

use App\Service\ProjectService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProjectController extends AbstractController
{
    public function __construct(
        private ProjectService $projectService
    ) {
    }

    #[Route('/projets', name: 'projects')]
    public function index(): Response
    {
        return $this->render('project/index.html.twig', [
            'projects' => $this->projectService->getAll(),
        ]);
    }

    #[Route('/projets/{slug}', name: 'project_detail')]
    public function show(string $slug): Response
    {
        $project = $this->projectService->getBySlug($slug);

        if (!$project) {
            throw $this->createNotFoundException('Projet non trouvé');
        }

        return $this->render('project/show.html.twig', [
            'project' => $project,
        ]);
    }
}

