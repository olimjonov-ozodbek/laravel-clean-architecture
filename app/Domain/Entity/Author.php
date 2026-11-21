<?php

declare(strict_types=1);

namespace App\Domain\Entity;

final class Author
{
    public function __construct(
        private readonly  string $id,
        private readonly  string $slug,
        private readonly  string $title,
        private readonly  ?string $imageUrl = null,
    ) {}

    public function getId(): string
    {
        return $this->id;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }
}
