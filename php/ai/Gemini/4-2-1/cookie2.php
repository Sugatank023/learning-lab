<?php
//名前の取得
$name="Taro";
//クッキーのセット
setcookie("user_name",$name,time()+86400);
?>
<!DOCTYPE html>
<html>
<body>
    <?php
    //クッキーが送られているか確認
    if(isset($_COOKIE["user_name"])){
        $user=htmlspecialchars($_COOKIE["user_name"],ENT_QUOTES,'UTF-8');
        echo"おかえりなさい、{$user}さん！";
    }else{
        echo"ゲストさん、こんにちは！";
    }
    ?>
</body>
</html>

