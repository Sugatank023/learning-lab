<?php
    class ZipCheck{
        //　正規表現
        private $expression = "/^[0-9]{3}-[0-9]{4}$/";
        //　チェックする文字列
        private $str;
        //　コンストラクタ
        function __construct($str){
            $this->str = $str; 
        }
        //正規表現にあっているかどうか
        function isZip(){
            if(preg_match($this->expression,$this->str) == 1){
                return true;
            }
            return false;
        }
        //文字列の取得
        function getstr(){
            return $this->str;
        }
    }
    $zip_checker1 = new ZipCheck("171-0022");
    $exp1 = $zip_checker1->getStr();
    if($zip_checker1->isZip() == true){
        echo "{$exp1}は郵便番号です。<br>";
    }else{
        echo "{$exp1}は郵便番号ではありません。<br>";
    }
    $zip_checker2 = new ZipCheck("1710022");
    $exp2 = $zip_checker2->getStr();
    if($zip_checker2->isZip() == true){
        echo "{$exp2}は郵便番号です。<br>";
    }else{
        echo "{$exp2}は郵便番号ではありません。<br>";
    }
?>