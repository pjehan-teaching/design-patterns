<?php

class NotificationIterator implements Iterator
{
    private NotificationAggregate $notifications;
    private int $currentPosition;

    /**
     * @param NotificationAggregate $notifications
     */
    public function __construct(NotificationAggregate $notifications)
    {
        $this->notifications = $notifications;
        $this->currentPosition = 0;
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        return $this->notifications->getValues()[$this->currentPosition];
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        $this->currentPosition++;
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        return $this->currentPosition;
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return isset($this->notifications->getValues()[$this->currentPosition]);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->currentPosition = 0;
    }
}