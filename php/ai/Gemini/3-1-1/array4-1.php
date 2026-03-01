<?php

//応用問題
$temperatures=[22,24,25,21,23,26,24];
$length=count($temperatures);
$sum=0;

for($i=0;$i<$length;$i++){
    $sum += $temperatures[$i];
    //echo "{$sum}<br>";
}

$avr=$sum/$length;

echo"平均気温：{$avr}℃";

/*
処理脱出用指示
exit();             処理終了
var_dump(変数);     表示
print_r(変数);      表示
*/

?>