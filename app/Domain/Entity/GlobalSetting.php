<?php
declare(strict_types=1);

namespace App\Domain\Entity;

final class  GlobalSetting
{
    public function __construct(
        private readonly string $siteTitle,
        private readonly string $siteTag,
    ){}

    public function getSiteTitle(): string
    {
        return $this->siteTitle;
    }

    public function getSiteTag(): string
    {
        return $this->siteTag;
    }
}