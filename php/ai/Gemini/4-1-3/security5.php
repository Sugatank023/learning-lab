<form method="POST" action="">
    <label>お名前：</label>
    <input type="text" name="customer_name" ><br>
    <label>件名（料金について/故障について/その他）：</label>
    <input type="text" name="subject"><br>
    <label>お問い合わせ内容：</label>
    <input type="text" name="inquiry_text"><br>
    <button type="submit">入力内容を確認する</button>
</form>
<hr>
<?php
//issetで確認
if(isset($_POST["customer_name"],$_POST["subject"],$_POST["inquiry_text"])){
    //変数代入（サニタイズ）
    $customer_name=htmlspecialchars($_POST["customer_name"],ENT_QUOTES,'UTF-8');
    $subject=htmlspecialchars($_POST["subject"],ENT_QUOTES,'UTF-8');
    $inquiry_text=htmlspecialchars($_POST["inquiry_text"],ENT_QUOTES,'UTF-8');
    if(empty($customer_name)){
        echo"お名前が入力されていません。";

    }else{
        echo"以下の内容で受け付けました。<br>";
        echo"お名前：{$customer_name}<br>";
        echo"件名：{$subject}<br>";
        echo"内容：{$inquiry_text}";
    }
}

?>