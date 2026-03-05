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
//issetで確認
if(isset($_POST["distance"])&&isset($_POST["dispatch"])&&isset($_POST["midnight"])){
    //変数に代入
    $distance=$_POST["distance"];
    $dispatch=$_POST["dispatch"];
    $midnight=$_POST["midnight"];
    //基本料金
    $fare=$distance*300;
    //迎車料金の分岐
    if($dispatch==="はい"){
        $fare+=400;
    }
    //深夜料金の分岐
    if($midnight==="はい"){
        $fare*=1.2;
    }
    //端数処理
    $fin_fare=floor($fare);

    //出力
    echo"ご乗車ありがとうございます。<br>タクシー運賃は{$fin_fare}円です。";
}
?>