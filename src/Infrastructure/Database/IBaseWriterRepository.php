<?php

declare(strict_types=1);

namespace MMDA\Core\Infrastructure\Database;

use MMDA\Core\Domain\Entity;
use MMDA\Core\Infrastructure\Database\Errors\RepositoryError;

interface IBaseWriterRepository
{
    public function upsert(Entity $data): RepositoryError|bool;

    public function remove(array $filter): RepositoryError|bool;
}
