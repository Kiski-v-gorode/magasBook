<?php

namespace App\Service\Recommendation\Model;

class RecommendationItem
{
    public function __construct(private readonly int $id)
    {
    }

    public function getId(): int
    {
        return $this->id;
    }
}
