<?php

//合計金額
$drinkcoin_sum = 5000;
//合計人数
$count_sum = 4;
//一人当たりの金額
$one_coin = ($drinkcoin_sum / $count_sum);

//表示指示
echo "飲み会の合計金額は" . $drinkcoin_sum . "円です。"
. "<hr>参加人数は" . $count_sum . "人です。"
. "<hr>一人当たり" . $one_coin . "円です。";
?>