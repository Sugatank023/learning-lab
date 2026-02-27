<?php

$weekdays=["月","火","水","木","金","土","日",];
$weekday=$weekdays[array_rand($weekdays)];

$trash_type="";

switch($weekday){
    case "月":
    case "木":
    $trash_type="燃えるゴミ";
    break;

    case"火":
    case"土":
    case"日":
    $trash_type="回収なし";
    break;

    case"水":
    $trash_type="ペットボトル";
    break;

    case"金":
    $trash_type="ビン・カン";
    break;
}

echo"今日は{$weekday}曜日です。<br>";
echo"出すゴミ：{$trash_type}";

?>