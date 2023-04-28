<?php

declare(strict_types=1);

namespace MMDA\Core\Application\Errors;

use MMDA\Core\Shared\Result;

class ApplicationError extends Result
{
    public function __construct($errors)
    {
        parent::__construct(false, null, $errors);
    }
}
