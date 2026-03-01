<?php

//応用問題回答
$temperatures = [22, 24, 25, 21, 23, 26, 24];
$total = 0; // 合計値を入れる箱

// count() を使えば、後からデータが10個や30個に増えてもfor文を書き換えずに済む（合理的！）
$data_count = count($temperatures);

// インデックスは0から始まり、データの個数未満まで繰り返す
for ($i = 0; $i < $data_count; $i++) {
    $total += $temperatures[$i]; // 配列の$i番目を合計に足していく
}

// 平均を計算（合計 ÷ 個数）
$average = $total / $data_count;

echo "1週間の平均気温は {$average} 度です。";
?>