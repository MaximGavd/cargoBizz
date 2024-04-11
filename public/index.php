<?php

require_once dirname(__DIR__ , 1) . '/vendor/autoload.php';

use App\Containers\Container;
use \App\Containers\Transport;

$smallContainer = new Container(new Transport(30 , 60 , 90 , 27));