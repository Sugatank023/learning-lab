<?php
//ユーザー定義関数
//例題
function drawLine(){
    echo"<hr>";
}

echo "第1章";
drawLine();
echo "第2章";
drawLine();


//練習問題
function alertError(){
    echo"<b>⚠️システムエラーが発生しました</b>";
}

alertError();
drawLine();


//応用問題
function countDown(){
    for($i=3;$i>=1;$i--){
        echo "{$i}<br>";
    }
    echo "発射！";
}

countDown();
drawLine();

?>