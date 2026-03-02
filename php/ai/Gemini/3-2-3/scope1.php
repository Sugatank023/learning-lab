<?php
//ユーザー定義関数、引数、スコープ

//$aと$bが引数
function addNumbers($a,$b){
    $sum=$a+$b;
    return $sum;    //結果を戻り値として返す（ここではechoしないのがコツ）
}

//5と3を渡して、返ってきた結果を変数に入れる
$result=addNumbers(5,3);
echo "計算結果は{$result}です。";

?>