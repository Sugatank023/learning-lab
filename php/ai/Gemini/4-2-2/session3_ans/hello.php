<?php

session_start();

if(isset($_SESSION["nickname"])){
    $name=$_SESSION["nickname"];
    echo"こんにちは、{$name}さん！別のページでもあなたの名前を覚えていますよ。";
}else{
    echo"名前が保存されていません";
}
?>