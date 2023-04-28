<?php

declare(strict_types=1);

namespace MMDA\Core\Domain;

abstract class AbstractWriterRepository
{
    abstract public function save(mixed $input): mixed;
}
