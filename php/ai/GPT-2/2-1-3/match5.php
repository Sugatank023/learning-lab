<?php

$id=rand(1,4);

$name=match($id){
    1=>"コーラ",
    2=>"ホットコーヒー",
    3=>"お茶",
    default=>"未登録"
};

$price=match($name){
    "コーラ"=>160,
    "ホットコーヒー"=>130,
    "お茶"=>150,
    default=>"0",
};

$temp=match($price){
    160=>"COLD",
    130=>"HOT",
    150=>"COLD",
    default=>"-",
};

/*echo"選択ID：{$id}<br>";
echo"あなたは【{$name}】を選択しました。<br>
料金は{$price}になります。<br>
状態は【{$temp}】です。<br>";*/
echo "選択ID：{$id}<br>";
echo"【{$name}】（{$temp}）は{$price}円です";

?>