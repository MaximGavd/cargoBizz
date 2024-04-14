<?php


namespace Extends;

class DefaultMark
{
    protected int | float $width;
    protected int | float $height;
    protected int | float $length;
    public function __construct($width , $length , $height)
    {
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
    }
    public function volume(): int | float
    {
        return $this->width * $this->height * $this->length;
    }
}