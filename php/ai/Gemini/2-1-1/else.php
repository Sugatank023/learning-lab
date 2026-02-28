<?php

//例
$score=10;
echo"あなたの点数は".$score."点です。<br>";

if($score>=80){
    echo"素晴らしい！";
}elseif($score>=60){
    echo"合格です。";
}else{
    echo "不合格...追試です。";
}

//ここから例題
echo"<hr>";
/*
$hour=4;
if($hour<=3){
    echo"こんばんは。";
}elseif($hour<=12){
    echo"おはようございます";

}elseif($hour<18){
    echo"こんにちは。";
}else{
    echo"こんばんは。";
}
*/

//回答
$hour=12;
if($hour<12){
    echo"おはようございます";
}elseif($hour<18){
    echo"こんにちは";
}else{
    echo "こんばんは";
}
?>