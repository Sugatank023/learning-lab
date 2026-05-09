<?php

class City{
    private $name;
    private $prefecture;

    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
    function setPrefecture($prefecture){
        $this->prefecture = $prefecture;
    }
    function getPrefecture(){
        return $this->prefecture;
    }
}

$c = new City();
$c->setName("横浜市");
$c->setprefecture("神奈川県");
echo "{$c->getName()}は{$c->getPrefecture()}にあります。<br>";

$c2 = new City();
$c2->setName("大阪市");
$c2->setprefecture("大阪府");
echo "{$c2->getName()}は{$c2->getPrefecture()}にあります。<br>";


?>