<?php
//関数　引数、戻り値、スコープ

//追加応用問題
function calculateBuffetPrice($age){
    if($age>=65){
        return (2000);
    }elseif($age>=13){
        return (3000);
    }elseif($age>=3){
        return (1000);
    }else{
        return (0);
    }
}

$family_ages=[35,32,8,2];
$total_price=0;

foreach($family_ages as $age ){
    $one_price=calculateBuffetPrice($age);
    echo"{$age}歳のお客さまの料金は{$one_price}円です。<br>";
    $total_price+=$one_price;
}

echo"<hr>家族全員の料金は{$total_price}円です。";

?>