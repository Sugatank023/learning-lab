<?php
$signal=rand(1,3);

switch($signal){
    case 1:
    echo"出た数値は{$signal}でした。<br>";
    echo "運勢：大吉";
    break;

    case 2:
    echo"出た数値は{$signal}でした。<br>";
    echo "運勢：吉";
    break;

    case 3:
    echo"出た数値は{$signal}でした。<br>";
    echo "運勢：凶";
    break;

    default:
    echo"エラー";

}

?>