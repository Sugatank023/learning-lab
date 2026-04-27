<?php
//クラスの学習ファイル
//自動車クラス

class Car{
    //スピードのプロパティ
    private $speed;
    private $number;

    function __construct($number){
        $this->number = $number;
        echo "「{$this->number}」のインスタンス生成<br>";
    }

    function drive ($speed){
        $this->speed = $speed;
        echo "「{$this->number}」が「{$this->speed}」km/hで走行<br>";
    }

    function stop(){
        echo"「{$this->number}」が停車<br>";
        $this->speed = 0;
    }
}


$car1 = new Car("あ12-34");
$car2 = new Car("い56-78");

$car1->drive(50);
$car1->stop();

$car2->drive(40);
$car2->stop();


?>                  