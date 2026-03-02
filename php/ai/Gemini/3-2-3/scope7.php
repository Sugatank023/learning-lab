<?php
//関数　引数、戻り値、スコープ

//追加応用問題
function calculateParkingFee($hours){
    if($hours>=3){
        return (1000);
    }elseif($hours>=1){
        return (500);
    }else{
        return (0);
    }
}

$parking_hours=[0.5,2,5,1,3.5];
$total_fee=0;

foreach($parking_hours as $hour){
    $fee=calculateParkingFee($hour);
    echo"駐車時間{$hour}時間の料金は{$fee}円になります。<br>";
    $total_fee+=$fee;
}

echo"<hr>";
echo"本日の駐車場総売上は{$total_fee}円です。";

?>