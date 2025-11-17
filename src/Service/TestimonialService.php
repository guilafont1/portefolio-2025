<?php

namespace App\Service;

class TestimonialService
{
    private array $testimonials;

    public function __construct()
    {
        $this->testimonials = require __DIR__ . '/../Data/testimonials.php';
    }

    public function getAll(): array
    {
        return $this->testimonials;
    }

    public function getById(int $id): ?array
    {
        foreach ($this->testimonials as $testimonial) {
            if ($testimonial['id'] === $id) {
                return $testimonial;
            }
        }

        return null;
    }
}

