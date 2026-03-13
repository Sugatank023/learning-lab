<form method="POST" action="">
    <label>商品A（単価：1,000円）の購入数：</label>
    <input type="number" name="item_a" min="0" max="1000">
    <label>商品B（単価：2,500円）の購入数：</label>
    <input type="number" name="item_b" min="0" max="1000">
    <label>商品C（単価：5,000円）の購入数：</label>
    <input type="number" name="item_c" min="0" max="1000">
    <button type="submit">計算する</button>
</form>

<hr>

<?php

$prices=["商品A"=>1000,"商品B"=>2500,"商品C"=>5000];
//1.issetで確認
if(isset($_POST["item_a"],$_POST["item_b"],$_POST["item_c"])){
    //2.変数代入（サニタイズ）
    $item_a=htmlspecialchars($_POST["item_a"],ENT_QUOTES,'UTF-8');
    $item_b=htmlspecialchars($_POST["item_b"],ENT_QUOTES,'UTF-8');
    $item_c=htmlspecialchars($_POST["item_c"],ENT_QUOTES,'UTF-8');
    //受け取った数量を商品名をキーとした連想配列にまとめる
    $quantities=["商品A"=>$item_a,"商品B"=>$item_b,"商品C"=>$item_c];
    //小計用の変数
    $subtotal=0;
    //ループで処理
    foreach($quantities as $key => $item){
        if($item>=1){
            $sum=$item*$prices["$key"];
            echo"{$key}：".$prices["$key"]."円 × {$item}個＝{$sum}円";
            $subtotal+=$sum;
        }
    }
    //
    $total=0;
    //
    
    //小計の計算
    if($subtotal<10000){
        $total=$subtotal+800;
    }
    echo"小計：{}円/送料：{}円/お支払総額：{}円";



}


?>