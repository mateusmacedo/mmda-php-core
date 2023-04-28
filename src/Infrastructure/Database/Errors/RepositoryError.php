<?php

declare(strict_types=1);

namespace MMDA\Core\Infrastructure\Database\Errors;

class RepositoryError
{
    public function __construct(
        private readonly mixed $error
    ) {
    }

    public function getError()
    {
        return $this->error;
    }
}
