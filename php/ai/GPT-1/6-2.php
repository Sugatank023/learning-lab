<?php
class Person{
    public $name;
    public $age;


    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

    public function greet(){
        return"{$this->name}さんは{$this->age}歳です。";
    }
}

$person=new Person("菅原",26);
echo $person->greet();

?>