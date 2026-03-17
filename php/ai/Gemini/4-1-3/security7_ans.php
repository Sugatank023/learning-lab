<form method="POST" action="">
    <label>商品A（単価：1,000円）の購入数：</label>
    <input type="number" name="item_a" min="0" max="1000"><br>
    <label>商品B（単価：2,500円）の購入数：</label>
    <input type="number" name="item_b" min="0" max="1000"><br>
    <label>商品C（単価：5,000円）の購入数：</label>
    <input type="number" name="item_c" min="0" max="1000"><br>
    <button type="submit">計算する</button>
</form>

<hr>

<?php
$prices = ["商品A" => 1000, "商品B" => 2500, "商品C" => 5000];

if (isset($_POST["item_a"], $_POST["item_b"], $_POST["item_c"])) {
    // 1. サニタイズ
    $item_a = htmlspecialchars($_POST["item_a"], ENT_QUOTES, 'UTF-8');
    $item_b = htmlspecialchars($_POST["item_b"], ENT_QUOTES, 'UTF-8');
    $item_c = htmlspecialchars($_POST["item_c"], ENT_QUOTES, 'UTF-8');

    $quantities = ["商品A" => $item_a, "商品B" => $item_b, "商品C" => $item_c];
    
    $subtotal = 0;

    // 2. 明細の出力と小計の計算
    foreach ($quantities as $key => $item) {
        if ($item >= 1) {
            // 変数を配列のキーにする際、" " は不要です（$prices[$key] が実務的）
            $sum = $item * $prices[$key];
            echo "{$key}：{$prices[$key]}円 × {$item}個 ＝ {$sum}円<br>";
            $subtotal += $sum;
        }
    }

    // 3. 送料の判定と合計の計算
    $fee = 800; // 基本の送料
    if ($subtotal >= 10000) {
        $fee = 0; // 10000円以上なら送料無料（0に上書き）
    }

    $total = $subtotal + $fee; // 最後に必ず足し算を行う

    // 4. 出力
    echo "<hr>";
    echo "小計：{$subtotal}円 / 送料：{$fee}円 / お支払総額：{$total}円";
}
?>