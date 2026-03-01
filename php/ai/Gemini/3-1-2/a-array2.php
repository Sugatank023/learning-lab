<?php
//例題　連想配列

$user = ["name"=>"田中","age"=>25];

//既存のキーを指定すると上書きができる
$user["age"] = 26;

//新しいキーを指定すると「追加」になる
$user["hobby"] = "読書";

echo "<pre>";
print_r($user);
echo "<pre><hr>";

?>