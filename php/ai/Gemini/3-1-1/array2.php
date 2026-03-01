<?php

$fruits=["りんご","みかん"];
$length=count($fruits);//変数に代入
for($i=0;$i<$length;$i++){
    var_dump($fruits[$i]);
    echo "<br>";
}

echo "<hr>";

$fruits[0]="いちご";
$fruits[2]="ぶどう";

$length=count($fruits);
for($i=0;$i<$length;$i++){
    var_dump($fruits[$i]);
    echo "<br>";
}

/*
$length=count($fruits);を入れて変数化すること
DRY原則違反なので、繰り返さない。（今回は配列のみのため例外。普段は気づくべき。）
*/


?>