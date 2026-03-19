<form method="POST" action="">
    <label>お気に入りの色（英語）：</label>
    <input type="text" name="fav_color">
    <button type="submit">登録</button>
</form>

<hr>

<?php

//issetでPOST確認
if(isset($_POST["fav_color"])){
    //POSTを変数に代入
    $fav_color=$_POST["fav_color"];
    //cookieの設定
    setcookie("saved_color",$fav_color,time()+3600);
}
?>

<!DOCTYPE html>
<html>
<body>
    <?php
    //issetでcookie確認
    if(isset($_COOKIE["saved_color"])){
        //cookieをサニタイズ
        $chose_color=htmlspecialchars($_COOKIE["saved_color"],ENT_QUOTES,'UTF-8');
        //表示処理
        echo"あなたが保存した色は{$chose_color}です。";
    }
    ?>
</body>
</html>
