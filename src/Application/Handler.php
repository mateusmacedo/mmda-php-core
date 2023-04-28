<?php

declare(strict_types=1);

namespace MMDA\Core\Application;

use MMDA\Core\Shared\Result;

interface Handler
{
    public function handle(Action $action): Result;
}
