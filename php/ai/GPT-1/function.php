<?php

//プロフィール関数
function profile($name,$age){
    return "<h2>{$name}さんは{$age}歳です</h2>";
}
echo profile("すがわら",26); 

//税込み価格-計算関数-
function calcTax($price,$taxRate){
    return $price+$price*$taxRate;
}
echo"<h2>";
echo calcTax(1200,0.1);
echo"<h2>";

?>