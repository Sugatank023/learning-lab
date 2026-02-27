<?php

function subtract($a,$b){//intを付けると自動で整数にする int$a
    if(!is_int($a)||!is_int($b)){
        throw new Exception("整数を入力してください");

    }
    return $a-$b;
}
try{
    echo "<p>結果：".subtract(8,2)."</p>";
}catch(Exception $e){
    echo"<p>エラー：".$e->getMessage()."</p>";
}

?>