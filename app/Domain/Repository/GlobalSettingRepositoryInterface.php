<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\GlobalSetting;

interface GlobalSettingRepositoryInterface
{
    public function getSettings(): GlobalSetting;
}
