<?php

class NotificationAggregate implements Aggregate
{
    /** @var Notification[] $values */
    private array $values;

    /**
     * @param Notification[] $values
     */
    public function __construct(array $values)
    {
        $this->values = $values;
    }

    /**
     * @return Notification[]
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * @param Notification[] $values
     */
    public function setValues(array $values): void
    {
        $this->values = $values;
    }

    public function getIterator(): Iterator
    {
        return new NotificationIterator($this);
    }

    public function removeAlreadySeen(): void
    {
        // La création d'un nouveau tableau via le spread operator ... est nécessaire pour ré-initialiser les indexs
        $this->setValues([...array_filter($this->getValues(), fn($notification) => !$notification->isSeen())]);
    }
}