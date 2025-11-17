<?php

namespace App\Service;

class ExperienceService
{
    private array $experiences;

    public function __construct()
    {
        $this->experiences = require __DIR__ . '/../Data/experiences.php';
    }

    public function getAll(): array
    {
        // Trier par date de début (plus récent en premier)
        usort($this->experiences, function ($a, $b) {
            $dateA = $a['start_date'];
            $dateB = $b['start_date'];
            
            // Les expériences en cours en premier
            if ($a['current'] && !$b['current']) {
                return -1;
            }
            if (!$a['current'] && $b['current']) {
                return 1;
            }
            
            return strcmp($dateB, $dateA);
        });

        return $this->experiences;
    }

    public function getById(int $id): ?array
    {
        foreach ($this->experiences as $experience) {
            if ($experience['id'] === $id) {
                return $experience;
            }
        }

        return null;
    }

    public function getCurrent(): array
    {
        return array_filter($this->experiences, function ($exp) {
            return $exp['current'] === true;
        });
    }
}

