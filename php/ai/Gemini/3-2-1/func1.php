<?php

//組み込み関数
$orders=[
    "コーヒー"=>300,
    "紅茶"=>350,
    "ケーキ"=>500
];

foreach($orders as $order=>$price){
    echo "{$order}は{$price}円になります<br>";
}

echo "<hr>";
echo "合計金額は".array_sum($orders)."円です。";


?>