<?php
//関数　引数、戻り値、スコープ

//追加応用問題
function calculateDeliveryFee($distance){
    if($distance>=10){
        return (1500);
    }elseif($distance>=5){
        return(900);
    }elseif($distance>=2){
        return (600);
    }else{
        return (400);
    }
}

$distances=[1,4,12,8,];
$total_price=0;

foreach($distances as $distance){
    $price_distance=calculateDeliveryFee($distance);
    echo "距離{$distance}kmの配送料金は{$price_distance}円です。<br>";
    $total_price+=$price_distance;
}

echo"本日の総売上は{$total_price}円です。";

?>