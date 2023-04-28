<?php

declare(strict_types=1);

namespace MMDA\Core\Domain;

interface IdGenerator
{
    public static function generate(): string|int;
}
