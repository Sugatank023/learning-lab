<form method="POST" action="">
    <label>ニックネーム</label>
    <input type="text" name="nickname"><br>
    <label>メッセージ</label>
    <input type="text" name="message"><br>
    <button tyepe=submit>送信</button>
</form>

<hr>

<?php
//issetで確認
if(isset($_POST["nickname"])&&isset($_POST["message"])){
    //変数に代入（サニタイズ）
    $nickname=htmlspecialchars($_POST["nickname"],ENT_QUOTES,'UTF-8');
    $message=htmlspecialchars($_POST["message"],ENT_QUOTES,'UTF-8');

    echo "『{$nickname}』さんのひとこと：『{$message}』";
}


?>