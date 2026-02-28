<?php

$n=[5,3,2];         //配列
$size=count($n);    //配列インデント数の格納
$sum=0;

//配列の値を表示しながら合計を計算
for($i=0;$i<$size;$i++){
    $sum += $n[$i];
    echo "\$n[{$i}]=$n[$i]<br>";
}
$avg=$sum/$size;    //平均を計算
echo"合計：{$sum} 平均：{$avg}<hr>";
var_dump($avg,$sum,$i,$n,$size);//追加　確認用
?>