<?php
$dice=0;

while($dice!=6){
    $dice=rand(1,6);
    echo"出目：{$dice}<br>";
}
echo"{$dice}が出たので終わり！";
?>