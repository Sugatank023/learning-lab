<?php
//ロッカー室を空ける
session_start();

//セッションにデータを保存（$_SESSIONという連想配列を使う）
$_SESSION["user_rank"]="ゴールド会員";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>セッション練習</title>
</head>
<body>
    <p>現在のランク：<?php echo $_SESSION["user_rank"]; ?></p>
    <p>※セッションはセットした直後に表示可能です。</p>
</body>
</html>