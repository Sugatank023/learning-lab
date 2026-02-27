<?php

echo "<h2>";
for($i=2;$i<=10;$i=$i+2){

    echo $i."<br>";

}
echo"</h2><hr>";

$songs=["ミュージック","映画","years"];
foreach($songs as $song){
    echo "<h2>{$song}<br>";
}
echo"<hr>";

$bag=[
    "名前"=>"菅原",
    "年齢"=>26,
    "生年月日"=>"1999/05/13",
    "住所"=>"神奈川県",
    "電話"=>"090-xxxx-xxxx"
];

foreach($bag as $key=>$value){
    echo "<p>{$key}---{$value}</p>";
}

?>