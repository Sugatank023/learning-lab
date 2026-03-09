<form method="POST" action="">
    <label>時給（円）：</label>
    <input type="text" name="hourly_wage"><br>
    <label>今月の労働時間（時間）：</label>
    <input type="text" name="work_hours"><br>
    <label>今月の出勤日数（日）：</label>
    <input type="text" name="work_days"><br>
    <button type="submit">給与を計算する</button>
</form>

<hr>

<?php
if (isset($_POST["hourly_wage"]) && isset($_POST["work_hours"]) && isset($_POST["work_days"])) {

    $hourly_wage = $_POST["hourly_wage"];
    $work_hours = $_POST["work_hours"];
    $work_days = $_POST["work_days"];

    // 1. バリデーション（ガード節：異常値ならここで処理を止める）
    if ($work_hours <= 0) {
        echo "労働時間が正しくありません。";
    } else {
        // ========== 正常な場合のみ、以下の計算を実行 ========== //

        // 2. 基本給の計算（時給 × 月間総労働時間）
        $basic_wage = $hourly_wage * $work_hours;

        // 3. 交通費の計算（上限10,000円のキャップ処理）
        $trans_cost = $work_days * 500;
        if ($trans_cost > 10000) {
            $trans_cost = 10000;
            // 実務では計算結果に影響を与えないシステムメッセージは画面に出さないか、別枠で表示します
        }

        // 4. 税引き計算（10%引き）
        $tax_basic_wage = $basic_wage * 0.9;

        // 5. 最終計算と出力
        $total_wage = $tax_basic_wage + $trans_cost;

        echo "今月の手取り給与は {$total_wage} 円です。（内交通費 {$trans_cost} 円）";
    }
}
?>