<?php
session_start();

// 3. ガード節：認証フラグがない、またはfalseなら即座に追い出す
if(!isset($_SESSION['is_auth'])||$_SESSION['is_auth']!==true){
    header('Location: Login.php');
    exit;
}

//共通ヘッダーを読み込む
require 'header.php';

//認証済みの場合のみ表示される
$name= htmlspecialchars($_SESSION['user_name'],ENT_QUOTES,'UTF-8');

?>

<h1>ダッシュボード</h1>
<p>ようこそ、<?= $name ?>さん。ここはログイン済みの人だけが見れるページです。</p>
<a href="logout.php">ログアウト</a>
