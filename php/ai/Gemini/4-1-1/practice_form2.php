
<form method="POST" action="">
    <label>パスワード：</form>
    <input type="text" name="password">
    <button type="submit">送信</button>
</form>

<hr>

<?php
// PHP部分：送られてきたデータを受け取る処理
// $_POST は、POSTで送られてきたデータが入る「特別な連想配列」です

//もし'password'というデータが送られてきたら（isset関数で確認）
if(isset($_POST['password'])){
    $pass=$_POST['password'];
    echo "あなたのパスワードは「{$pass}」です。（POSTで受け取りました）";
}
?>