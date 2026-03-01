<?php
//連想配列　応用問題

$item=[
    "name"=>"PC",
    "price"=>100000,
    "quantity"=>2
];

$total_price=0;
$total_price=$item["price"]*$item["quantity"];

echo "計算式は".$item["price"]."[円]×".$item["quantity"]."[台]={$total_price}[円]<br>";
echo "PCの合計金額は{$total_price}円です。";

?>