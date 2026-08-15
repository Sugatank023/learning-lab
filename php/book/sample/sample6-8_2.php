<!DOCTYPE html>
<html>
<head>
    <title>セッションの活用2</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>セッションの値の確認</h1>
    <?php
        session_start();//セッションスタート
        $_SESSION["data"] = "PHP";
        echo "<p> セッションID：".session_id()."</p>";
        echo "<p> 設定した値：{$_SESSION["data"]}</p>";
    ?>
    <a href="sample6-8_1.php">トップへ</a>
</body>
</html>

