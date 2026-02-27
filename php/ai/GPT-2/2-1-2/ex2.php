<?php

$input_id="admin";
$input_pass=1234;

if($input_id==="admin" && $input_pass===1234){
    echo"ログイン成功";
}else{
    echo"ログイン失敗";
}

echo"<hr>";

$name="銀タンク";

if(mb_strlen($name)<3||mb_strlen($name)>10){
    echo"名前は3文字以上、10文字以下にしてください";
}else{
    echo"{$name}<br>登録完了";
}

/*
mb_strlen($name) 関数の中の文字数を返す。

*/

?>