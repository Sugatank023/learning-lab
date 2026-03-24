<?php

if(isset($_SESSION['last_activity'])){
    //現在時刻の変数代入
    $current_time=time();
    //ログイン時の時間
    $last_time=$_SESSION['last_activity'];
    //差分計算の代入
    $dif_time=$current_time-$last_time;

    //タイムアウトの分岐
    if($dif_time>300){
        //ログアウトへリダイレクト
        header('Location: logout.php');
    }else{
        //現在の時間を上書き
        $_SESSION['last_activity']=time();
    }
}else{
    echo"エラー";
    header('Location: logout.php');
}

?>