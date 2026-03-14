<form method="POST" action="">
    <label>商品A（単価：1,000円）の購入数：</label>
    <input type="number" name="item_a" min="0" max="1000"><br>
    <label>商品B（単価：2,500円）の購入数：</label>
    <input type="number" name="item_b" min="0" max="1000"><br>
    <label>商品C（単価：5,000円）の購入数：</label>
    <input type="number" name="item_c" min="0" max="1000"><br>
    <button type="submit">計算する</button>
</form>

<hr>

<?php
//整数チェック入りのスクリプト（GPT）
$prices=["商品A"=>1000,"商品B"=>2500,"商品C"=>5000];

if(isset($_POST["item_a"],$_POST["item_b"],$_POST["item_c"])){

    // 整数チェック
    if(
        !ctype_digit($_POST["item_a"]) ||
        !ctype_digit($_POST["item_b"]) ||
        !ctype_digit($_POST["item_c"])
    ){
        exit("整数のみ入力してください");
    }

    // 数値として扱う
    $item_a=(int)$_POST["item_a"];
    $item_b=(int)$_POST["item_b"];
    $item_c=(int)$_POST["item_c"];

    $quantities=["商品A"=>$item_a,"商品B"=>$item_b,"商品C"=>$item_c];

    $subtotal=0;

    foreach($quantities as $key => $item){
        if($item>=1){
            $sum=$item*$prices[$key];
            echo "{$key}：".$prices[$key]."円 × {$item}個＝{$sum}円<br>";
            $subtotal+=$sum;
        }
    }

    $fee=800;
    $total=$subtotal;

    if($subtotal<10000){
        $total+=$fee;
    }

    echo "小計：{$subtotal}円 / 送料：{$fee}円 / お支払総額：{$total}円";
}
?>