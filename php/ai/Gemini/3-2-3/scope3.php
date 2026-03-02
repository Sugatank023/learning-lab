<?php
//関数　引数、戻り値、スコープ

//練習問題
function calculateTax($price){
    $inTax_price=$price*1.1;
    return ($inTax_price);
}

//呼び出し
$this_price=calculateTax(1000);

echo"税込み{$this_price}円です";
echo"<br>税込み".calculateTax(1000)."円です";
echo"<hr>";


//応用問題
function getEvaluation($score){
    if($score>=80){
        return ("A");
    }elseif($score>=60){
        return ("B");
    }else{
        return("C");
    }
}

$scores=[85,45,72];

foreach( $scores as $score){
    $evl=getEvaluation($score);
    echo"{$score}点の評価は{$evl}です。<br>";
}

?>