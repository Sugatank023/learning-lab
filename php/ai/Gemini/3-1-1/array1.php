<?php
//配列を作る
$colors=["赤","青","黄"];
//データを取り出すには、変数名の後に[番号を付ける]
echo $colors[0]."<br>"; //赤
echo $colors[1]."<br>";//青
echo $colors[2]."<br>";//黄

//追加分　確認用
$a="<br>";
for($i=0;$i<3;$i++){
    var_dump($colors[$i]);
    echo $a;
}
?>
