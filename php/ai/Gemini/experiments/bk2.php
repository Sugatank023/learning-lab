<?php
$weekdays=["月","火","水","木","金","土","日",];
$weekday=$weekdays[array_rand($weekdays)];

switch($weekday){
    case"月":
    case"木":
        $trash_type="燃えるゴミ";
    break;

    case"水":
        $trash_type="ペットボトル";
    break;

    case"金":
        $trash_type="ビン・カン";
    break;

    case"火":
    case"日":
    case"土":
        $trash_type="回収なし";
    break;

    default:
    $trash_type="エラー";
    break;

}

echo"今日は{$weekday}曜日です<br>";
echo"出すゴミ：{$trash_type}";
?>