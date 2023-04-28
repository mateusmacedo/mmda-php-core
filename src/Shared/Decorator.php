<?php

declare(strict_types=1);

namespace MMDA\Shared;

interface Decorator
{
    public function execute(callable $callback, array $parameters = []);
}
