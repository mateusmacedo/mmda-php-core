<?php

declare(strict_types=1);

namespace MMDA\Core\Domain;

interface Saga
{
    public function start(): void;

    public function handle(DomainEvent $event): void;

    public function compensate(): void;
}
