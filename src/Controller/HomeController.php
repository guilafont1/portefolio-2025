<?php

namespace App\Controller;

use App\Service\ProjectService;
use App\Service\ExperienceService;
use App\Service\SkillService;
use App\Service\EducationService;
use App\Service\TestimonialService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    public function __construct(
        private ProjectService $projectService,
        private ExperienceService $experienceService,
        private SkillService $skillService,
        private EducationService $educationService,
        private TestimonialService $testimonialService
    ) {
    }

    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'projects' => $this->projectService->getLatest(3),
            'experiences' => $this->experienceService->getAll(),
            'skills' => $this->skillService->getAll(),
            'education' => $this->educationService->getAll(),
            'testimonials' => $this->testimonialService->getAll(),
        ]);
    }
}

