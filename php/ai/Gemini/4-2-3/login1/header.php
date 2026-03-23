

<header style="background: #eee; padding: 10px;">
    <?php if(isset($_SESSION['is_auth'])&&$_SESSION['is_auth']===true):?>
        [<?=htmlspecialchars($_SESSION['user_name'],ENT_QUOTES,'UTF-8')  ?>]さん、こんにちは
        <a href="logout.php">ログアウト</a>
    <?php else:?>
        ログインしていません。
        <a href="login.php">ログイン</a>
    <?php endif; ?>
</header>
<hr>

