<?php
declare(strict_types=1);

namespace App\Domain\Entity;

final class Category
{
    public function __construct(
        private readonly string $title,
    ){}

    public function getTitle():string
    {
        return $this->title;
    }
}