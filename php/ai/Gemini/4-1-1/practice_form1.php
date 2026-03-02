
<form method="GET" action="">
    <label>お名前：</label>
    <input type="text" name="user_name">
    <button type="submit">送信</button>
</form>

<hr>

<?php
//PHP部分：送られてきたデータを受け取る処理
//$_GETは、GETで送られてきたデータが入る「特別な連想配列」

//もし'user_name'というデータが送られてきたら、（isset関数で確認）

if(isset($_GET['user_name'])){
    $name=$_GET['user_name'];
    echo "こんにちは、{$name}さん！（GETで受け取りました）";
}

?>