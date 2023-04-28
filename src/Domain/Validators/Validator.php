<?php

declare(strict_types=1);

namespace MMDA\Core\Domain\Validators;

abstract class Validator
{
    protected string|array|null $errorMessage;

    abstract public function validate(mixed $input): bool;

    abstract public function getErrorMessage(): string|array|null;
}
