<?php
// --- 1. 処理ブロック（一番上に書く！HTMLや空白もNG） ---
if (isset($_POST["fav_color"])) {
    $fav_color = $_POST["fav_color"];
    // クッキーをセット（ブラウザへの返信にメモを添える）
    setcookie("saved_color", $fav_color, time() + 3600);
    
    // 実務テクニック：セットした直後に表示したい場合は、
    // $_COOKIEではなく、入力された値をそのまま使うのが合理的です
    $display_color = $fav_color;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>クッキー練習</title>
</head>
<body>
    <form method="POST" action="">
        <label>お気に入りの色（英語）：</label>
        <input type="text" name="fav_color">
        <button type="submit">登録</button>
    </form>

    <hr>

    <?php
    // クッキーが存在すれば表示
    if (isset($_COOKIE["saved_color"])) {
        $chose_color = htmlspecialchars($_COOKIE["saved_color"], ENT_QUOTES, 'UTF-8');
        echo "あなたが保存した色は 「{$chose_color}」 です。（クッキーから取得）";
    } 
    // セットした直後の場合（クッキーはまだ届いていないが、入力はある場合）
    elseif (isset($display_color)) {
        $chose_color = htmlspecialchars($display_color, ENT_QUOTES, 'UTF-8');
        echo "「{$chose_color}」 を保存しました！次にページを開いた時も覚えています。";
    }
    ?>
</body>
</html>