<?php
$signal="blue";

$action=match($signal){
    "red"=>"止まれ",
    "yellow"=>"注意",
    "blue"=>"進め",
    default=>"故障かな？",
};

echo $action;
echo"<br>";

$signa=12;

$action=match($signa){
    11 => 40,
    12 => 50,
    10 =>60,
    default=>90,
};

echo $action;

?>
