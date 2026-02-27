<?php

$random=rand(1,3);

$rank=match($random){
    1=>"A",
    2=>"B",
    3=>"C",
    default=>"判定不能",
};

$comment=match($rank){
    "A" =>"大変よくできました",
    "B" =>"よくできました",
    "C" =>"もう少し頑張りましょう",
    default=>"判定不能",

};

echo"乱数は「{$random}」<br>";
echo"成績はランクは「{$rank}」です。<br>";
echo$comment;

?>