<?php

declare(strict_types=1);

namespace App\Domain\Entity;

final class Post
{

    public function __construct(
        private readonly string $id,
        private readonly string $slug,
        private readonly string $title,
        private readonly string $content,
        private readonly string $publishedDate,
        private readonly string $teaser,
        private readonly ?string $heroImageUrl = null,
        private readonly ?Author $author = null,
        private readonly array $categories = [],
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
    public function getContent(): string
    {
        return $this->content;
    }
    public function getPublishedDate(): string
    {
        return $this->publishedDate;
    }
    public function getTeaser(): string
    {
        return $this->teaser;
    }
    public function getHeroImageUrl(): ?string
    {
        return $this->heroImageUrl;
    }
    public function getAuthor(): ?Author
    {
        return $this->author;
    }
    /**
     * @return array<Category>
     */
    public function getCategories(): array
    {
        return $this->categories;
    }
}
