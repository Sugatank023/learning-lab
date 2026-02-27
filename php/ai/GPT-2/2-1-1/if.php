<?php

//変数格納
$score=80;

//表示方法1（スペース法）
echo "あなたの点数は $score 点です";
echo"<hr>";

//表示方法2（つなげ法）
echo"あなたの点数は".$score."点です";
echo"<hr>";

//if文,表示法
if($score>=60){
    echo"あなたの点数は".$score."点です";
    echo"<br>";
    echo"合格です！";
}

?>