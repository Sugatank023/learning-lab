<?php
session_start();
// 1. セッション変数を空にする
$_SESSION=[];
// 2. クッキーの有効期限を過去にして削除する
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-3600,'/');
}

// 3. サーバー側のセッションデータを破棄
session_destroy();
header('Location: login.php');
exit;
?>
