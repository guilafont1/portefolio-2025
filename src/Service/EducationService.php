<?php

namespace App\Service;

class EducationService
{
    private array $education;

    public function __construct()
    {
        $this->education = require __DIR__ . '/../Data/education.php';
    }

    public function getAll(): array
    {
        // Trier par date (plus récent en premier)
        usort($this->education, function ($a, $b) {
            $dateA = $a['start_date'];
            $dateB = $b['start_date'];
            
            // Les formations en cours en premier
            if ($a['current'] && !$b['current']) {
                return -1;
            }
            if (!$a['current'] && $b['current']) {
                return 1;
            }
            
            return strcmp($dateB, $dateA);
        });

        return $this->education;
    }

    public function getCurrent(): array
    {
        return array_filter($this->education, function ($edu) {
            return $edu['current'] === true;
        });
    }
}

