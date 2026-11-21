<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\Author;

interface AuthorRepositoryInterface
{
    public function findBySlug(string $slug): ?Author;

    public function findById(string $id): ?Author;
}
