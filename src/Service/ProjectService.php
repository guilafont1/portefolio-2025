<?php

namespace App\Service;

class ProjectService
{
    private array $projects;

    public function __construct()
    {
        $this->projects = require __DIR__ . '/../Data/projects.php';
    }

    public function getAll(): array
    {
        return $this->projects;
    }

    public function getBySlug(string $slug): ?array
    {
        foreach ($this->projects as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }

        return null;
    }

    public function getLatest(int $limit = 3): array
    {
        $projects = $this->projects;
        usort($projects, function ($a, $b) {
            return strcmp($b['date'], $a['date']);
        });

        return array_slice($projects, 0, $limit);
    }
}

