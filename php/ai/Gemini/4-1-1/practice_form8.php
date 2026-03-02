<form method="POST" action="">
    <label>単価（円）：</label>
    <input type="text" name="price"><br>
    <label>個数（個）：</label>
    <input type="text" name="quantity"><br>
    <label>会員ランク（A/B/C）：</label>
    <input type="text" name="rank">
    <button type="submit">見積もりを出す</button>
</form>

<hr>

<?php
//issetで確認
if(isset($_POST["price"]) && isset($_POST["quantity"]) && isset($_POST["rank"])){
    //変数に代入
    $price=$_POST["price"];
    $count=$_POST["quantity"];
    $rank=$_POST["rank"];
    //小計の計算
    $subtotal=$price*$count;
    //ランク判定
    switch($rank){
        case "A":
            $total=$subtotal*0.8;
        break;
        case "B":
            $total=$subtotal*0.9;
        break;
        default:
        $total=$subtotal;
        break;
    }
    //消費税計算
    $total_intax=$total*1.1;
    //端数処理
    $fin_price=floor($total_intax);
    //出力
    echo "ランク『{$rank}』の割引を適用しました。<br>税込のお支払い合計は{$fin_price}円です。";
}


?>