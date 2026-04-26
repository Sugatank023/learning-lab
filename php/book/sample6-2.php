<?php
//クラスの学習ファイル

//クラスファイルの読み込み
require_once("car.php");

//インスタンスの生成
$car1 = new Car();
$car2 = new Car();

//プロパティ
$car1->number = "あ12-34";
$car1->speed = 50;

//メゾット
$car1->drive();
$car1->stop();

//繰り返し
$car2->number = "い56-67";
$car2->speed = 70;
$car2->drive();
$car2->stop();


?>                  