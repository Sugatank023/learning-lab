<form method="POST" action="">
    <label>宿泊日数（泊）：</label>
    <input type="text" name="nights"><br>
    <label>宿泊人数（人）：</label>
    <input type="text" name="guests"><br>
    <label>朝食オプション（あり/なし）：</label>
    <input type="text" name="breakfast">
    <button type="submit">見積もりを出す</button>
</form>

<hr>

<?php
//issetで確認
if(isset($_POST["nights"])&&isset($_POST["guests"])&&isset($_POST["breakfast"])){
    //変数に代入
    $night=$_POST["nights"];
    $guest=$_POST["guests"];
    $breakf=$_POST["breakfast"];
    

    //宿泊基礎料金
    $base_price=$night*$guest*8000;

    //宿泊数依存の料金条件分岐
    if($night>=3){
        $base_price=$base_price*0.9;
    }

    //朝食基礎料金の条件分岐
    $breakfast_base_price=match($breakf){
        "あり"=> $breakfast_price=$night*$guest*1500,
        "なし"=> $breakfast_price=0,
        default=>$breakfast_price=0
    };

    //最終料金計算
    $sum_price=$base_price+$breakfast_base_price;

    //表示部分
    echo "お見積り総額は{$sum_price}円です。";
}

?>