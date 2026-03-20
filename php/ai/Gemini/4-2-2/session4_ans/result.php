<?php
session_start();

if(isset($_POST["fav_food"])){
    $fav_name=htmlspecialchars($_POST["fav_food"],ENT_QUOTES,'UTF-8');
    $_SESSION["fav_food"]=$fav_name;

    $fav=$_SESSION["fav_food"];
    $user=$_SESSION["user_name"];

    echo"{$user}さんの好きな食べ物は{$fav}ですね！アンケート協力ありがとうございました。";
}else{
    echo"エラー！！データが届いていません！！";
}

session_destroy();
?>

