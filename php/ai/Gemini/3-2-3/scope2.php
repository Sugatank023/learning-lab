<?php
//関数　引数、戻り値、スコープ
//例題

function isAdult($age){
    if($age>=18){
        return true;
    }else{
        return false; 
    }
}


//使う側
$my_age=20;
if(isAdult($my_age)===true){
    echo "あなたは成人です。年齢は{$my_age}歳です。";
}else{
    echo "あなたは未成年です。年齢は{$my_age}です。";
}

?>