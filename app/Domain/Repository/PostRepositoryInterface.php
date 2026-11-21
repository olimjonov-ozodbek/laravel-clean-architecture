<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\Post;

interface PostRepositoryInterface
{
    public function getAll(): array;

    public function findBySlug(string $slug): ?Post;

    public function getRelatedPosts(string $slug, int $limit = 3): array;

    public function getByAuthorId(string $authorId): array;
}
