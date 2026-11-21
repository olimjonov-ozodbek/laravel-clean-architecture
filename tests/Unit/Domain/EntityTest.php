<?php

namespace Tests\Unit\Domain;

use App\Domain\Entity\Author;
use App\Domain\Entity\Category;
use App\Domain\Entity\GlobalSetting;
use App\Domain\Entity\Post;
use PHPUnit\Framework\TestCase;


class  EntityTest extends TestCase
{
    public function test_can_create_author_entity(): void
    {
        $author = new Author('auth_1', 'ali_valiyev', 'Ali Valiyev', 'https://img.uz/ali.jpg');

        $this->assertSame('auth_1', $author->getId());
        $this->assertSame('ali_valiyev', $author->getSlug());
        $this->assertSame('Ali Valiyev', $author->getTitle());
        $this->assertSame('https://img.uz/ali.jpg', $author->getImageUrl());
    }

    public function test_can_create_author_entity_with_realtions(): void
    {
        $author = new Author('auth_1', 'ali_valiyev', 'Ali Valiyev');
        $catigori = new Category('Dasturlash');

        $post = new Post(
            id: 'post_1',
            slug: 'clean-architecture-php',
            title: 'Clean Architecture PHP da',
            content: 'Maqolaning to\'liq matni...',
            publishedDate: '2026-11-21',
            teaser: 'Qisqacha tafsif',
            heroImageUrl: 'https://img.uz/hero.jpg',
            author: $author,
            categories: [$catigori]

        );

        $this->assertSame('post_1', $post->getId());
        $this->assertSame('Clean Architecture PHP da', $post->getTitle());
        $this->assertSame('Ali Valiyev', $post->getAuthor()->getTitle());
        $this->assertCount(1, $post->getCategories());
        $this->assertSame('Dasturlash', $post->getCategories()[0]->getTitle());
    }
}
