<?php

declare(strict_types=1);

namespace MMDA\Core\Domain;

use DateTimeImmutable;

abstract class DomainEvent
{
    public function __construct(
        public readonly string|int $identifier,
        public readonly ?array $data = [],
        public readonly ?string $schema = 'https://schema.org/',
        public readonly ?string $version = '1.0',
        public readonly ?DateTimeImmutable $occurredOn = new DateTimeImmutable()
    ) {
    }
}
