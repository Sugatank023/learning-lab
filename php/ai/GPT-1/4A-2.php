<?php
$num=[1,2,3,4,5];
$double=array_map(fn($z)=>$z*$z,$num);
print_r($double);
?>