<form method="POST" action="">
    <label>走行距離（km）：</label>
    <input type="text" name="distance"><br>
    <label>迎車（はい/いいえ）：</label>
    <input type="text" name="dispatch"><br>
    <label>深夜利用（はい/いいえ）：</label>
    <input type="text" name="midnight">
    <button type="submit">運賃を計算する</button>
</form>

<hr>


<?php

//issetで中身確認
if(isset($_POST["distance"])&&isset($_POST["dispatch"])&&isset($_POST["midnight"])){
    //変数に代入
    $distance=$_POST["distance"];
    $dispatch=$_POST["dispatch"];
    $midnight=$_POST["midnight"];
    //走行距離料金の計算
    $fare=$distance*300;
    //迎車料金の条件分岐
    $dispatch_fare=match($dispatch){
        "はい"=>$fare+400,
        "いいえ"=>$fare,
        default=>$fare
    };
    //深夜料金の条件分岐
    $midnight_fare=match($midnight){
        "はい"=>$dispatch_fare*1.2,
        "いいえ"=>$dispatch_fare,
        default=>$dispatch_fare
    };
    //最終料金の計算（端数処理）
    $fin_fare=floor($midnight_fare);
    
    //表示
    echo"ご乗車ありがとうございます。<br>タクシー運賃は{$fin_fare}円です。";
}

?>