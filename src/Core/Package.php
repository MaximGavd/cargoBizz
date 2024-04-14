<?php

namespace Core;
use Extends\DefaultMark;

class Package extends DefaultMark
{
    public int $count;

    public function __construct($width, $length, $height, $count)
    {
        parent::__construct($width, $length, $height);
        $this->count = $count;
    }
}
