<form method="POST">
    <label>ログインID：</label>
    <input type="text" name="employee_id"><br>
    <label>パスワード：</label>
    <input type="password" name="password">
    <button type="submit">送信</button>
</form>


<hr>


<?php
//1.まずは「データが来ているか？」isset()で確認
if(isset($_POST["employee_id"]) && isset($_POST["password"])){

    //2.送られてきたデータは「全て文字列」として扱う
    if($_POST["employee_id"]==="admin" && $_POST["password"]==="1234"){
        echo "ログインに成功しました";
    }else{
        echo "IDまたはパスワードが間違っています";
    }
}
?>