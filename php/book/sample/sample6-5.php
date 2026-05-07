<?php

class Car {
    private $serial = 0;
    private static $carNumber = 0;
    
    function __construct() {
        self::$carNumber++;
        $this->serial = self::$carNumber;
    }
    function showSerial(){
        echo "&nbsp;&nbsp;製造番号：{$this->serial}<br>";
    }
    static function showCarNumber(){
        $number = self::$carNumber;
        echo "生産台数:{$number}";
    }
}

Car::showCarNumber();
$car1 = new Car();
$car1->showSerial();

Car::showCarNumber();
$car2 = new Car();
$car2->showSerial();

$car3=new Car();
$car3->showSerial();

Car::showCarNumber();

?>                  