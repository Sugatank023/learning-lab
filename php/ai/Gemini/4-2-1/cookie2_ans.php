<?php
// 1日 = 60秒 × 60分 × 24時間 = 86400秒
setcookie("user_name", "Taro", time() + 86400);
?>

<!DOCTYPE html>
<html>
<body>
    <?php
    if (isset($_COOKIE["user_name"])) {
        $name = htmlspecialchars($_COOKIE["user_name"], ENT_QUOTES, 'UTF-8');
        echo "おかえりなさい、{$name}さん！";
    } else {
        echo "ゲストさん、こんにちは！";
    }
    ?>
</body>
</html>