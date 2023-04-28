<?php

declare(strict_types=1);

namespace MMDA\Core\Domain;

interface ValueObject
{
    public function equals(ValueObject $valueObject): bool;
}
