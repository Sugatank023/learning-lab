<?php
//foreachによる配列のループ　a-array3.php

/*ここからForeachなしの文
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
*///ここからforeach


$scores=[
    "数学"=>85,
    "英語"=>70,
    "国語"=>90
];

foreach($scores as $subject=>$score){
    echo $subject."は".$score."点です。<br>";
}


?>