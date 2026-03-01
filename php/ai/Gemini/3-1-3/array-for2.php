<?php

//foreach 練習問題
$sports=["サッカー","野球","テニス","バスケ"];

foreach($sports as $sport){
    echo"・{$sport}が好きです<br>";
}
echo"<hr>";


//foreach 応用問題
$orders=[
    "コーヒー"=>300,
    "紅茶"=>350,
    "ケーキ"=>500
];

$total=0;
foreach($orders as $order=>$price){
    echo"{$order}は{$price}円です。<br>";
    $total+=$price;
}

echo "<hr>合計金額は{$total}円です。"

?>