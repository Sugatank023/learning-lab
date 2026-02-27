<?php

$name="菅原";
$age=26;
echo"<h2>";
if($age>=65){

    echo "{$name}さんは高齢者です。";

}elseif($age>=18){

    echo "{$name}さんは成人です。";

}else{

    echo "{$name}さんは未成年です。";

}
echo"<hr>";

$artist="サカナクション";
switch($artist){
    case "サカナクション":
        echo "<p>{$artist}はいいセンスですね！</p>";
        break;
    
    case "RADWINPS":
        echo"<p>{$artist}はセンスないですね！</p>";
        break;
    
    default:
        echo"選択肢のアーティストを選んでください。";

}



?>