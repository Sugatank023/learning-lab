<?php
session_start();

//共通ヘッダーを読み込む
//require_once 'config.php'; 
require_once 'guard.php';
require_once 'check_auth.php';
require_once 'header.php';

//認証済みの場合のみ表示される
$name= htmlspecialchars($_SESSION['user_name'],ENT_QUOTES,'UTF-8');

?>

<h1>ダッシュボード</h1>
<p>ようこそ、<?= $name ?>さん。ここはログイン済みの人だけが見れるページです。</p>
<a href="logout.php">ログアウト</a>

