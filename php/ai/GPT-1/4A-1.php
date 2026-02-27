<?php
//無名関数とアロー関数

//無名関数
$square = function($x){
    return $x*$x;
};
echo $square(5);//25

echo"<br><hr>";

//アロー関数 ※省略型無名関数
$cubed=fn($y)=>$y*$y*$y;
echo $cubed(6);//216

echo"<br><hr>";

//実用例 ※array_map()配列利用
$numbers=[1,2,3];
$squared=array_map(fn($n)=>$n*$n,$numbers);
print_r($squared);//[1,4,9]

?>