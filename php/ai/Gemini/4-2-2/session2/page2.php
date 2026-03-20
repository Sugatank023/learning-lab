<?php
session_start();

if(isset($_SESSION["my_hobby"])){
    $hobby=htmlspecialchars($_SESSION["my_hobby"],ENT_QUOTES,'UTF-8') ;
    echo"あなたの趣味は{$hobby}ですね！";
}

?>
