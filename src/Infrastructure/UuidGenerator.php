<?php

declare(strict_types=1);

namespace MMDA\Core\Infrastructure;

use MMDA\Core\Domain\IdGenerator;
use Ramsey\Uuid\Uuid;

class UuidGenerator implements IdGenerator
{
    public static function generate(): string
    {
        return Uuid::uuid4()->toString();
    }
}
