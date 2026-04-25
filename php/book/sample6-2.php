<?php

require_once("car.php");

$car1 = new Car();
$car2 = new Car();

$car1->number = "あ12-34";
$car1->speed = 50;
$car1->drive();
$car1->stop();

$car2->number = "い56-67";
$car2->speed = 70;
$car2->drive();
$car2->stop();

?>