<?php

declare(strict_types=1);

namespace MMDA\Core\Infrastructure\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Inject
{
    public function __construct(public string $className)
    {
    }
}
