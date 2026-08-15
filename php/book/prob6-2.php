<?php

class Country{
    private $name;
    private $capital;

    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
    function setCapital($Capital){
        $this->capital = $Capital;
    }
    function getCapital(){
        return $this->capital;
    }
}

$c = new Country();
$c->setName("日本");
$c->setCapital("東京都");
echo "{$c->getName()}の首都は{$c->getCapital()}です。<br>";

$c2 = new Country();
$c2->setName("中国");
$c2->setCapital("北京");
echo "{$c2->getName()}の首都は{$c2->getCapital()}です。<br>";


?>