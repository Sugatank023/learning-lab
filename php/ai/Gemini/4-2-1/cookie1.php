<?php
//現在の時刻を取得
$current_time=date("Y-m-d H:i:s");
//クッキーをセットする（名前：Last_visit, 値：現在の時刻, 有効期限：今から1時間後）
//time()は現在の秒数を表し、3600秒（1時間）を足しています。（保存時間）
setcookie("last_visit",$current_time,time()+3600);
?>

<!DOCTYPE html>
<html>
<body>
    <?php
    //クッキーが送られてきているか確認
    if(isset($_COOKIE["last_visit"])){
        $last=htmlspecialchars($_COOKIE["last_visit"],ENT_QUOTES,'UTF-8');
        echo"前回の訪問は{$last}ですね。";
    }else{
        echo"初めての訪問、またはクッキーが期限切れです。";
    }
    ?>
    <br><a href="">ページを再読み込み</a>
</body>
</html>