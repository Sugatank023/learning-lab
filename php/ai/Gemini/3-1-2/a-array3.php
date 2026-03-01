<?php
//連想配列 練習問題

$scores=[
    "math"=>85,
    "english"=>70,
    "japanese"=>90
];

$name=["数学","英語","国語"];
$eng_name=["math","english","japanese"];

$nameCount=count($name);
for($i=0;$i<$nameCount;$i++){
    echo $name[$i]."は".$scores[$eng_name[$i]]."点です。<br>";
}

/*
forearchで短縮可能。
3-1-3　array-for1.php 参考
*/
?>