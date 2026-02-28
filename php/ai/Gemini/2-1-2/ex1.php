<?php
$age=25;
$has_ticket=true;

if($age>=20 && $has_ticket==true){
    echo"会場に入れます";
}else{
    echo"会場には入れません";
}

echo"<hr>";

$year=2024;

if($year%4==0 && $year>0){
    echo"{$year}年はうるう年です";
}else{
    echo"{$year}年は平年です";
}

?>