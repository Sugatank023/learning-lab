<?php

//関数の定義
//文字列版
function greet($name){
    return"<p>こんにちは、{$name}さん！</p>";

}
echo greet("すがわら");

//数字版
function sample($x){
    return"<p>ここに数字を表示[{$x}]</p>";

}
echo sample(121);

//引数を複数
function add($a,$b){
    return $a+$b;
}
echo "<p>足し算の結果：".add(3,7)."</p>";

//戻り値の重要性
function getTax($price){
    return $price*0.1;
}
$tax=getTax(1000);
echo "<p>消費税：{$tax}円</P>";

//スコープの重要性（変数の有効範囲）
function testScope(){
    $msg="関数だけの変数";
    echo"<p>{$msg}</p>";    
}

testScope();
//echo $msg; ×エラー：関数の外からは見えない

?>