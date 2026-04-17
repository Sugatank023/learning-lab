<?php

require_once("car.php");

$car = new Car();

$car->number = "あ12-34";
$car->speed = 50;

$car->drive();
$car->stop();

?>