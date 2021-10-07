<?php

class Notification
{
    private string $message;
    private DateTime $date;
    private bool $seen;

    public function __construct(string $message, DateTime $date, bool $seen = false)
    {
        $this->setMessage($message);
        $this->setDate($date);
        $this->setSeen($seen);
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    public function isSeen(): bool
    {
        return $this->seen;
    }

    public function setSeen(bool $seen): void
    {
        $this->seen = $seen;
    }
}