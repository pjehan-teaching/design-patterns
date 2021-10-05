<?php

class ImageUpload extends FileUpload
{
    public function getGdImage(): ?GdImage
    {
        switch ($this->file->getExtension()) {
            case "png":
                return imagecreatefrompng($this->file->getPathname());
            case "jpg":
            case "jpeg":
                return imagecreatefromjpeg($this->file->getPathname());
            default:
                return null;
        }
    }

    public function resize(): void
    {
        $image = $this->getGdImage();
        $scaledImage = imagescale($image, 150, 150);
        imagejpeg($scaledImage, $this->file->getPathname());
    }

    public function changeQuality(): void
    {
        // TODO: Implement code to reduce image quality
    }
}