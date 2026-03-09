<form method="POST" action="">
    <label>お名前：</label>
    <input type="text" name="user_name">
    <button type="submit">送信</button>
</form>

<hr>

<?php
//issetで確認
if(isset($_POST["user_name"])){
    //変数代入（サニタイズ）
    $user_name=htmlspecialchars($_POST["user_name"],ENT_QUOTES,'UTF-8');
    //表示処理
    echo"こんにちは、{$user_name}さん";
}

?>