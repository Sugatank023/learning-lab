<?php

$weekdays=["月","火","水","木","金","土","日",];
$weekday=$weekdays[array_rand($weekdays)];

$trash_type=match($weekday){
    "月","木"=>"燃えるゴミ",
    "水"=>"ペットボトル",
    "金"=>"ビン・カン",
    "土","日","火"=>"回収なし",
};

echo"今日は{$weekday}曜日です。<br>";
echo"出すゴミ：{$trash_type}<br>"

?>