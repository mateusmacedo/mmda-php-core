<?php

declare(strict_types=1);

namespace MMDA\Core\Domain;

abstract class AggregateRoot extends Entity
{
    private BaseArrayObject $domainEvents;

    public function __construct()
    {
        parent::__construct();
        $this->clearEvents();
    }

    public function clearEvents(): void
    {
        $this->domainEvents = new BaseArrayObject();
    }

    public function getEvents(): array
    {
        return $this->domainEvents->getArrayCopy();
    }

    protected function addEvent(DomainEvent $event)
    {
        $this->domainEvents->append($event);
    }
}
