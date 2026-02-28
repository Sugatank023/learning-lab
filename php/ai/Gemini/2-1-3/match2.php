<?php
$signal=rand(1,3);

$omikuji=match($signal){
    1 => "大吉",
    2 => "吉",
    3 => "凶",
    default => "エラー",
};

echo"出た数字は{$signal}でした。<br>";
echo "運勢：{$omikuji}";

?>

