<form method="POST" action="">
    <label>社員名：</label>
    <input type="text" name="emp_name"><br>
    <label>身長（cm）：</label>
    <input type="number" name="height_cm" step="0.1"><br>
    <label>体重（kg）：</label>
    <input type="number" name="weight_kg" step="0.1"><br>
    <button type="submit">判定する</button>
</form>

<hr>

<?php
// 1. 関数の作成（単語のスペル typo にも注意：calculate）
function calculateBMI($height_cm, $weight_kg) {
    $height_m = $height_cm / 100;
    // 分母（身長×身長）を先に計算させるため、カッコ () で括る
    $bmi = $weight_kg / ($height_m * $height_m);
    return $bmi;
}

if (isset($_POST["emp_name"], $_POST["height_cm"], $_POST["weight_kg"])) {
    
    // 2. 変数代入（マッピングを正確に！）
    $emp_name  = htmlspecialchars($_POST["emp_name"], ENT_QUOTES, 'UTF-8');
    $height_cm = htmlspecialchars($_POST["height_cm"], ENT_QUOTES, 'UTF-8');
    $weight_kg = htmlspecialchars($_POST["weight_kg"], ENT_QUOTES, 'UTF-8');

    // 3. ガード節（入力エラーの判定）
    if (empty($emp_name) || $height_cm <= 0 || $weight_kg <= 0) {
        // エラーメッセージだけを表示し、elseには行かない
        echo "入力エラー<br>！正しい値を入れてください！<br>";
    } else {
        // ========== 正常な場合のみ実行 ==========
        
        // BMIの計算
        $bmi = calculateBMI($height_cm, $weight_kg);
        $bmi = round($bmi, 1);
        
        // BMIの条件判定
        if ($bmi >= 25) {
            $status = "肥満";
        } elseif ($bmi >= 18.5) {
            $status = "普通体重";
        } else {
            $status = "低体重（痩せ型）";
        }
        
        // 出力部分
        echo "【{$emp_name}さんの診断結果】<br>";
        echo "BMI値：{$bmi}<br>";
        echo "判定：{$status}";
    }
}
?>