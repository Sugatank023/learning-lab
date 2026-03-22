<?php
session_start();

if (isset($_SESSION["user_name"]) && isset($_POST["fav_food"])) {
    // セッションから名前を取得
    $name = $_SESSION["user_name"];
    // POSTから食べ物を取得してサニタイズ
    $food = htmlspecialchars($_POST["fav_food"], ENT_QUOTES, 'UTF-8');

    echo "{$name}さんの好きな食べ物は、{$food}ですね！アンケート協力ありがとうございました。";

    // 使い終わったらロッカーを空にする
    session_destroy();
    echo "<br>セッションを破棄しました（リロードすると名前は消えます）。";
}
?>