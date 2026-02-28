<?php

$random=rand(1,3);
switch($random){
    case 1:
    $rank="A";
    break;

    case 2:
    $rank="B";
    break;

    case 3:
    $rank="C";
    break;

    default:
    echo"判定不能";
}

echo"乱数は「{$random}」<br>";

switch($rank){
    case "A":
    echo"成績ランクは「{$rank}」<br>";
    echo"大変良くできました";
    break;

    case "B":
    echo"成績ランクは「{$rank}」<br>";
    echo"良くできました";
    break;

    case "C":
    echo"成績ランクは「{$rank}」<br>";
    echo"もう少し頑張りましょう";
    break;

    default:
    echo "判定不能";
}


?>
