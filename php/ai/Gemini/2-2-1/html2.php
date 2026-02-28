<?php


//プルダウン
$current_year=2024;

echo"<select name='year'>";

for($year=$current_year;$year>=$current_year-100;$year=$year-1){
    echo"<option>{$year}年</option>";
}

echo"</select>";


?>