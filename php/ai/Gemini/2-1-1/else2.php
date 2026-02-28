<?php
$number=1234;

//例題
/*
if($number % 2 = 0 ){
    echo "偶数です";
}else{
    echo"奇数です";
}
等しいは==
elseだけで奇数が表せられる。
その発想が必要。
*/
if($number%2==0){
    echo"値は".$number."、偶数です";
}else{
    echo"値は".$number."、奇数です";
}

?>