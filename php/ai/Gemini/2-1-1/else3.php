<?php
$age=6;
/*
if($age<6){
    echo"運賃は無料です";
}elseif($age<=12){
    echo"運賃は100円です";
}else{
    echo"運賃は200円です";
}
*/

//ここから回答
$price=0;
if($age<6){
    $price=0;
}elseif($age<=12){
    $price=100;
}else{
    $price=200;
}
echo"運賃は".$price."円です。";

/*$priceを使うことがシステムの本質。無駄を美しく省く。
処理（ロジック）と表示（出力）部分を分けて考える。*/

echo"<hr>";
//さらに応用問題
$health_score=77;
$result=0;

if($health_score<40){
    $result="要再検査";
}elseif($health_score<80){
    $result="正常";
}else{
    $result="極めて健康";
}

echo"診断結果：".$result;

?>