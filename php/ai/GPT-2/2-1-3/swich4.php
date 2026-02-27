<?php
$plan_id=rand(1,4);

switch($plan_id){
    case 1 :
    $plan_name="ライト";
    $plan_price=500;
    break;

    case 2 :
    $plan_name="スタンダード";
    $plan_price=980;
    break;

    case 3 :
    $plan_name="プレミアム";
    $plan_price=1480;
    break;

    default:
    $plan_name="未選択";
    $plan_price=0;
    break;
}

echo"選択ID：{$plan_id}<br>";
echo"あなたは【{$plan_name}プラン】を選択しました。料金は{$plan_price}円です。";

?>