<?php

$score = 85;

if ($score >= 90) {
    echo "評価: S";
} elseif ($score >= 70) {
    echo "評価: A";
} elseif ($score >= 50) {
    echo "評価: B";
} else {
    echo "評価: C";
}
echo "<br><hr>";


//ここから別問題
//if文
$age = 25;
$name = "すがわら";

echo "<h2>条件分岐の例</h2>";

if ($age >= 20) {
    echo "<p>{$name} さんは成人です。</p>";
} else {
    echo "<p>{$name} さんは未成年です。</p>";
}

//swhich文
$color = "青";
echo "<h2>switch文の例</h2>";
switch ($color) {
    case "赤":
        echo "<p>情熱的な色です。</p>";
        break;
    case "青":
        echo "<p>冷静な色です。</p>";
        break;
    case "緑":
        echo "<p>自然や平和を表す色です。</p>";
        break;
    default:
        echo "<p>色が不明です。</p>";
}

?>