<?php

echo"<h2>for文1~5を表示</h2>";
for ($i=1;$i<=5;$i=$i+1){
    echo"<h3><p>{$i}</h3></p>";
}
echo"<hr>";

echo"<h2>while文1~5を表示</h2>";
$j=1;
while($j<=5){
    echo"<p><h3>{$j}</h3></p>";
    $j=$j+1;
}
echo"<hr>";

echo"<h2>foreach文を表示</h2>";
$colors=["赤","青","緑","黄","紫"];
foreach($colors as $color){
    echo"<p><h3>色：{$color}</h3></p>";
}
echo"<hr>";


echo"<h2>foreach文を表示（連想配列）</h2>";
$bag=[
    "リスト1"=>"りんご",
    "リスト2"=>"みかん",
    "リスト3"=>"梨",
    "リスト4"=>"桃",
    "リスト5"=>"ぶどう"
];

foreach($bag as $key=>$value){
    echo"<h3>{$key} - {$value}</h3>";
}

?>