<form method="POST" action="">
    <label>宿泊日数（泊）：</label>
    <input type="text" name="nights"><br>
    <label>宿泊人数（人）：</label>
    <input type="text" name="guests"><br>
    <label>朝食オプション（あり/なし）：</label>
    <input type="text" name="breakfast"><br>
    <button type="submit">見積もりを出す</button>
</form>

<hr>

<?php
// 1. 全てのデータが送信されているか確認
if (isset($_POST["nights"]) && isset($_POST["guests"]) && isset($_POST["breakfast"])) {

    // 2. 変数に代入
    $nights = $_POST["nights"];
    $guests = $_POST["guests"];
    $breakfast = $_POST["breakfast"];

    // 3. 基本料金の計算（1人1泊 8000円）
    $base_price = 8000 * $nights * $guests;

    // 4. 連泊割引の適用（3泊以上なら基本料金を10%OFF）
    if ($nights >= 3) {
        $base_price = $base_price * 0.9;
        echo "※3泊以上の連泊割引が適用されました。<br>";
    }

    // 5. 朝食料金の計算
    $breakfast_price = 0; // 初期値は0円にしておく
    if ($breakfast === "あり") {
        // ありの場合は 1人1泊 1500円
        $breakfast_price = 1500 * $nights * $guests;
    }

    // 6. 合計金額の計算（基本料金 ＋ 朝食代）
    $total_price = $base_price + $breakfast_price;

    // 7. 出力（必ず isset の ifブロックの中に書く！）
    echo "お見積り総額は {$total_price} 円です。";
}
?>