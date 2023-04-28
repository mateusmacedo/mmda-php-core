<?php

declare(strict_types=1);

namespace MMDA\Core\Infrastructure\Database;

use MMDA\Core\Domain\Entity;
use MMDA\Core\Infrastructure\Database\Contracts\{ListProps, ListResponse};
use MMDA\Core\Infrastructure\Database\Errors\RepositoryError;

interface IBaseReaderRepository
{
    public function list(ListProps $props): ListResponse|RepositoryError;

    public function findOne(array $filter): Entity|RepositoryError|null;
}
