<?php

$total=4000;
$is_member=false;
$has_coupon=true;
$final_price=0;

if($total>=5000 && ($is_member===true||$has_coupon===true)){
    $final_price=$total*0.8;
    echo"割引が適用されました！";
}else{
    $final_price=$total;
    echo"割引対象外です。";
}

echo"<br>";
echo"最終金額は{$final_price}円になります。";

/*条件が重なるときは（）でくくることができる。
$$ かつ
|| または
==  等しい
!　～でない
!= 等しくない
*/

$today=date('Y-m-d');
echo"{$today}";

?>