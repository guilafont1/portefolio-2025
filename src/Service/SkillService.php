<?php

namespace App\Service;

class SkillService
{
    private array $skills;

    public function __construct()
    {
        $this->skills = require __DIR__ . '/../Data/skills.php';
    }

    public function getAll(): array
    {
        return $this->skills;
    }

    public function getByCategory(string $category): ?array
    {
        return $this->skills[$category] ?? null;
    }

    public function getAllCategories(): array
    {
        return array_keys($this->skills);
    }
}

