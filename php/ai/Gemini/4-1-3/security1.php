<?php
//例題
if(isset($_POST["user_name"])){
    //危険な書き方（今まで）
    //$name=$_POST["user_name"];

    //安全な書き方（サニタイズ）
    $name=htmlspecialchars($_POST["user_name"],ENT_QUOTES,'UTF-8');
    echo"こんにちは{$name}さん";
}

?>