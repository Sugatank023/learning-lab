<?php

class person{
    private $name;
    private $age;
    private $sex;
    
    public function __construct($name,$age,$sex){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function show(){
        echo"{$this->name}({$this->age})性別：{$this->sex}<br>";
    }

}


$human1 = new person("山田太郎",18,"男");
$human2 = new person("佐藤花子",17,"女");
$human3 = new person("鈴木次郎",16,"男");

$human1->show();
$human2->show();
$human3->show();

?>