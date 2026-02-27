<?php

$plan_id=rand(1,4);

$plan_name=match($plan_id){
    1=>"ライト",
    2=>"スタンダード",
    3=>"プレミアム",
    default=>"未選択",
};

$plan_price=match($plan_name){
    "ライト"=>500,
    "スタンダード"=>980,
    "プレミアム"=>1480,
    default=>0,
};

echo "選択ID：{$plan_id}<br>";
echo "あなたは【{$plan_name}プラン】を選択しました。料金は{$plan_price}円です。";
?>