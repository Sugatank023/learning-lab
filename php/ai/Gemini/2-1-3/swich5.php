<?php

$id=rand(1,4);

switch($id){
    case 1:
        $name="コーラ";
        $price=160;
        $temp="COLD";
    break;

    case 2:
        $name="ホットコーヒー";
        $price=130;
        $temp="HOT";
    break;

    case 3:
        $name="お茶";
        $price=150;
        $temp="COLD";
    break;

    default:
        $name="未登録";
        $price=0;
        $temp="-";
    break;
}

/*
echo"あなたは【{$name}】を選択しました。<br>
料金は{$price}円になります。<br>
状態は【{$temp}】です。";*/
echo "選択ID：{$id}<br>";
echo"【{$name}】({$temp})は{$price}円です";
?>