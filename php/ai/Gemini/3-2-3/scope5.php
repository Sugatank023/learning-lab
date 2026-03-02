<?php
//関数　引数、戻り値、スコープ

//追加応用問題
function calculateShipping($weight){
    if($weight>=10){
        return(1500);
    }elseif($weight<5){
        return (500);
    }else{
        return (1000);
    }
}


//呼び出し
$weights=[3,8,12];
$total_price=0;

foreach($weights as $weight){
    $price=calculateShipping($weight);
    echo "重量{$weight}kgの送料は{$price}円になります。<br>";
    $total_price+=$price;
}

echo"合計は{$total_price}円です。";

?>