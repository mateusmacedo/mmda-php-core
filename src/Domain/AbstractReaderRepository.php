<?php

declare(strict_types=1);

namespace MMDA\Core\Domain;

abstract class AbstractReaderRepository
{
    abstract public function find(mixed $input): mixed;
}
