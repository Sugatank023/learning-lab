<?php

session_start();

if(isset($_SESSION["nickname"])){
    $name=htmlspecialchars($_SESSION["nickname"],ENT_QUOTES,'UTF-8') ;
    echo"こんにちは、{}さん！別のページでもあなたの名前を覚えていますよ。";
}

?>