<?php

namespace App\Containers;

class Container
{
    protected int|float $width;
    protected int|float $height;
    protected int|float $length;
    public function __construct(Transport $transport)
    {
        print $transport->setBoxes();
    }


    protected function calculateVolume(): int|float
    {
        return $this->width * $this->height * $this->length;
    }
}
class Transport {
    protected int|float $width;
    protected int|float $height;
    protected int|float $length;
    protected int|float $count;
    public function __construct($width , $height , $length , $count)
    {
        $this->length = $length / 100;
        $this->height = $height / 100;
        $this->width = $width / 100;
        $this->count = $count / 100;
    }
    public function setBoxes() {
       return $this->width * $this->height * $this->length;
    }

}