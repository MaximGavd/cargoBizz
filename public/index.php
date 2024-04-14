<?php


require_once dirname(__DIR__ , 1) . '/vendor/autoload.php';

use Core\Package;
use Core\Calculator;
use Core\Container;

$transport1 = array(new Package(78 , 79 , 93 , 27) , new Package(78 , 79 , 93 , 1));


$container10Ft = new Container(200 , 200 ,290);
$container40Ft = new Container(200   , 200 ,1200);

$calculator1 = Calculator::containersNeeded($container10Ft , $transport1);

echo $calculator1;