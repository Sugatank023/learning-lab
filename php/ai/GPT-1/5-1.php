<?php
echo "<h2>例外処理の基本</h2>";

try{
    $a=10;
    $b=0;
    if($b===0){
        throw new Exception("0で割ることはできません");
    }
    $result=$a/$b;
    echo "<p>結果：{$result}</p>";
}catch(Exception $e){
    echo "<p>エラー：".$e->getMessage()."</p>";
}
?>