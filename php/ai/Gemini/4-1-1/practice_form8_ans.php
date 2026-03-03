<form method="POST" action="">
    <label>単価（円）：</label>
    <input type="text" name="price"><br>
    <label>個数（個）：</label>
    <input type="text" name="quantity"><br>
    <label>会員ランク（A/B/C）：</label>
    <input type="text" name="rank"><br>
    <button type="submit">見積もりを出す</button>
</form>

<hr>

<?php
// 1. 3つのデータが全て送信されているか確認
if (isset($_POST["price"]) && isset($_POST["quantity"]) && isset($_POST["rank"])) {

    // 2. 変数に代入して扱いやすくする
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $rank = $_POST["rank"];

    // 3. 小計の計算
    $subtotal = $price * $quantity;

    // 4. ランクによる割引計算（今回はmatch式を使用する例）
    $discounted_price = match ($rank) {
        "A" => $subtotal * 0.8, // 20%OFF
        "B" => $subtotal * 0.9, // 10%OFF
        default => $subtotal    // 割引なし
    };

    // 5. 消費税（10%）を計算
    $tax_included = $discounted_price * 1.1;

    // 6. 日本の商習慣に合わせ、小数点以下を切り捨てる（組み込み関数の活用）
    $final_price = floor($tax_included);

    // 7. 結果の表示
    echo "ランク『{$rank}』の割引を適用しました。<br>";
    echo "税込のお支払い合計は {$final_price} 円です。";
}
?>