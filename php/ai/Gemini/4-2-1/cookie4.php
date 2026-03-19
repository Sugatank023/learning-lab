<?php
//issetでGET確認
if(isset($_GET["item"])){
    //クッキーをセット
    setcookie("recent_item",$_GET["item"],time()+86400);
    //変数に代入
    $display_item=$_GET["item"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>クッキー練習2</title>
</head>
<body>
    <a href="?item=A001">商品Aを見る</a><br>
    <a href="?item=B002">商品Bを見る</a><br>
    <a href="?item=C003">商品Cを見る</a><br>

    <hr>

    <?php
    if(isset($_COOKIE["recent_item"])){
        $chose_item=htmlspecialchars($_COOKIE["recent_item"],ENT_QUOTES,'UTF-8');
        echo"最近チェックした商品：{$chose_item}";
    }elseif(isset($display_item)){
        $chose_item=htmlspecialchars($display_item,ENT_QUOTES,'UTF-8');
        echo"「{$chose_item}」を保存しました。次にページを開いた時も覚えています。";
    }
    ?>
</body>
</html>