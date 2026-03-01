<?php

function PrintFruits($list){
    $length=count($list);//変数に代入
    for($i=0;$i<$length;$i++){
        var_dump($list[$i]);
        echo "<br>";
    }
}

$fruits=["りんご","みかん"];
PrintFruits($fruits);

echo "<hr>";

$fruits[0]="いちご";
$fruits[2]="ぶどう";
PrintFruits($fruits);

/*
$fruitsとforを関数にして呼び出せるように改良する。
array2-1.phpの改良版
*/

?>