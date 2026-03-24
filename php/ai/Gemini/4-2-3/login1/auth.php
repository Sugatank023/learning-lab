<?php
session_start();
// 固定のユーザー情報（実務ではDBから取得）
$id_db='sugawara';
$pw_db='pass123';

$id_input=$_POST['user_id']??'';
$pw_input=$_POST['password']??'';

if($id_input===$id_db && $pw_input===$pw_db){
    // 1. セッション固定攻撃対策：IDを新しく作り直す
    session_regenerate_id(true);
    // 2. 「ログイン済み」という状態をセッションに刻む
    $_SESSION['is_auth']=true;
    $_SESSION['user_name']=$id_input;
    //現在時刻の保存（応用問題）
    $_SESSION['last_activity']=time();

    header('Location:dashboard.php');
    exit;
}else{
    echo"IDまたはパスワードが違います。<a href='login.php'>戻る</a>";
}


?>