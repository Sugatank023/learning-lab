<form method="POST" action="">
    <label>走行距離（km）：</label>
    <input type="text" name="distance"><br>
    <label>迎車（はい/いいえ）：</label>
    <input type="text" name="dispatch"><br>
    <label>深夜利用（はい/いいえ）：</label>
    <input type="text" name="midnight">
    <button type="submit">運賃を計算する</button>
</form>


<?php
//issetで中身確認
if(isset($_POST["distance"])&&isset($_POST["dispatch"])&&isset($_POST["midnight"])){
    //変数に代入
    $distance=$_POST["distance"];
    $dispatch=$_POST["dispatch"];
    $midnight=$_POST["midnight"];
    //基礎料金計算式
    $distance_price=$distance*300;
    //迎車料金条件分岐
    $dispatch_price=match($dispatch){
        "はい"=>$distance_price+400,
        "いいえ"=>$distance_price,
        default=>$distance_price
    };
    //深夜割増
    $total_price=match($midnight){
        "はい"=>$dispatch_price*1.2,
        "いいえ"=>$dispatch_price
    };
    //端数処理
    $fin_price=floor($total_price);

    //表示処理
    echo"ご乗車ありがとうございます。<br>タクシー料金は{$fin_price}円です。";
    
}
?>