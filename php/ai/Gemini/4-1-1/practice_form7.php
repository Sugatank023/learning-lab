<form method="POST" action="">
    <label>単価（円）</label>
    <input type="text" name="price">
    <br>
    <label>個数（個）</label>
    <input type="text" name="quantity">
    <button type="submit">計算する</button>
</form>

<hr>

<?php
//issetで確認
if(isset($_POST["price"])&&isset($_POST["quantity"])){
    //変数に代入
    $unit_price=$_POST["price"];
    $item_count=$_POST["quantity"];

    //小計の計算式
    $sum_price=$unit_price*$item_count;

    //割引の分岐
    if($sum_price>=5000){
        echo"送料無料！";
        $fin_price=$sum_price;
    }else{
        echo"送料500円がかかります。";
        $fin_price=$sum_price+500;
    }

    //最終合計金額表示
    echo"<br>お支払い合計金額は{$fin_price}円です。";
}

?>