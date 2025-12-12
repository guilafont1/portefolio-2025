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
        // Trier : Master en premier, puis formations en cours, puis par date décroissante
        usort($this->education, function ($a, $b) {
            // Master Expert en premier (même s'il n'est pas encore commencé)
            $aIsMaster = strpos($a['degree'], 'Master Expert') !== false;
            $bIsMaster = strpos($b['degree'], 'Master Expert') !== false;
            
            if ($aIsMaster && !$bIsMaster) {
                return -1;
            }
            if (!$aIsMaster && $bIsMaster) {
                return 1;
            }
            
            // Ensuite les formations en cours
            if ($a['current'] && !$b['current']) {
                return -1;
            }
            if (!$a['current'] && $b['current']) {
                return 1;
            }
            
            // Puis par date décroissante
            return strcmp($b['start_date'], $a['start_date']);
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

