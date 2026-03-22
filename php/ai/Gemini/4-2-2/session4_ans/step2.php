<?php
session_start();
if (isset($_POST["user_name"])) {
    // 前のページのデータをセッションに保存
    $_SESSION["user_name"] = htmlspecialchars($_POST["user_name"], ENT_QUOTES, 'UTF-8');
}
?>
<p>お名前を保存しました。次に好きな食べ物を教えてください。</p>
<form method="POST" action="result.php">
    <label>好きな食べ物：</label>
    <input type="text" name="fav_food">
    <button type="submit">回答する</button>
</form>