<?php

abstract class FileUpload
{
    protected ?SplFileObject $file = null;
    protected string $filename = "";

    public function handle(SplFileObject $file, string $filename): void
    {
        $this->file = $file;
        $this->filename = $filename;
        $this->move();
        $this->rename();
        $this->resize();
        $this->changeQuality();
        $this->file = null;
    }

    public function move(): void
    {
        $filePath = __DIR__ . "/uploads/" . $this->filename;
        move_uploaded_file($this->file->getRealPath(), $filePath);
        $this->file = new SplFileObject($filePath);
    }

    public function rename(): void
    {
        $filePath = $this->file->getPath() . "/" . uniqid($this->file->getBasename("." . $this->file->getExtension()) . "-", true) . "." . $this->file->getExtension();
        rename($this->file->getRealPath(), $filePath);
        $this->file = new SplFileObject($filePath);
    }

    public function resize(): void
    {

    }

    public function changeQuality(): void
    {

    }
}