<?php

//ガード節：認証フラグがない、またはfalseなら即座に追い出す
if(!isset($_SESSION['is_auth'])||$_SESSION['is_auth']!==true){
    header('Location: Login.php');
    exit;
}

?>