<?php

session_start();

if(isset($_POST["nickname"])){
    //届いたデータをサニタイズ
    $name=htmlspecialchars($_POST["nickname"],ENT_QUOTES,'UTF-8') ;
    $_SESSION["nickname"]=$name;
    echo"ニックネーム「{$name}」を保存しました。<br>";
    echo'<a href="hello.php">次のページへ行く</a>';
}

?>