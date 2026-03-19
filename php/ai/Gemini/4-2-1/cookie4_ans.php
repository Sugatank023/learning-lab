<?php
// --- 1. 処理ブロック（最上部） ---
if(isset($_GET["item"])){
    $item=$_GET["item"];
    //GETで受け取った商品コードをクッキーに保存（1日間）
    setcookie("recent_item",$item,time()+86400);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品チェック履歴</title>
</head>
<body>
    <h3>商品ラインナップ</h3>
    <ul>
        <li><a href="?item=A001">商品Aを見る</a></li>
        <li><a href="?item=B002">商品Bを見る</a></li>
        <li><a href="?item=C003">商品Cを見る</a></li>
    </ul>

    <hr>
    
    <?php
    // クッキーがあれば表示
    if(isset($_COOKIE["recent_item"])){
        $recent=htmlspecialchars($_COOKIE["recent_item"],ENT_QUOTES,'UTF-8');
        echo"<strong>最近チェックした商品：{$recent}</strong>";
    }else{
        echo"チェックした履歴はありません。";
    }
    ?>
</body>
</html>