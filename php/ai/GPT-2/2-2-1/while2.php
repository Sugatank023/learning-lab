<?php
$money=0;
$days=0;


while($money<=5000){
    $deposit=rand(100,500);
    $money=$deposit+$money;
    $days=$days+1;

echo"{$days}日目：{$deposit}円貯金 (計{$money}円)<br>";
}

echo "目標達成<br>";
echo "{$days}日で、{$money}円貯まりました。";
?>