<?php

declare(strict_types=1);

namespace MMDA\Core\Domain\Validators\Implementations;

use MMDA\Core\Domain\Validators\Validator;

class NotEmptyValidator extends Validator
{
    public function validate(mixed $input): bool
    {
        if (is_null($input)) {
            return false;
        }

        if (is_string($input)) {
            return !empty($input);
        }

        if (is_array($input)) {
            return !empty($input);
        }

        if (is_bool($input)) {
            return $input;
        }

        if (is_int($input)) {
            return 0 !== $input;
        }

        if (is_float($input)) {
            return 0.0 !== $input;
        }

        return false;
    }

    /**
     * @return null|array|string
     */
    public function getErrorMessage(): array|string|null
    {
        return 'Cannot be empty';
    }
}
