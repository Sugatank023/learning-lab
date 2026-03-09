<form method="POST" action="">
    <label>学生の名前：</label>
    <input type="text" name="student_name"><br>
    <label>国語の点数：</label>
    <input type="text" name="score_ja"><br>
    <label>数学の点数：</label>
    <input type="text" name="score_math"><br>
    <label>英語の点数：</label>
    <input type="text" name="score_en"><br>
    <button type="submit">成績レポートを作成する</button>
</form>

<hr>

<?php
// 1. 関数の定義（点数から評価を判定する担当者）
function getGrade($score) {
    if ($score >= 80) {
        return "A";
    } elseif ($score >= 60) {
        return "B";
    } else {
        return "C";
    }
}

// 2. 受け取りの確認
if (isset($_POST["student_name"], $_POST["score_ja"], $_POST["score_math"], $_POST["score_en"])) {

    // 3. 全てのデータをサニタイズして変数へ
    $name = htmlspecialchars($_POST["student_name"], ENT_QUOTES, 'UTF-8');
    $ja = htmlspecialchars($_POST["score_ja"], ENT_QUOTES, 'UTF-8');
    $math = htmlspecialchars($_POST["score_math"], ENT_QUOTES, 'UTF-8');
    $en = htmlspecialchars($_POST["score_en"], ENT_QUOTES, 'UTF-8');

    // 4. バリデーション（名前が空なら止める）
    if (empty($name)) {
        echo "名前を入力してください。";
    } else {
        // ========== 正常な場合のみ処理を実行 ==========

        echo "<h3>{$name} さんの各科目の成績</h3>";

        // 5. 扱いやすいように連想配列にまとめる
        $subjects = [
            "国語" => $ja,
            "数学" => $math,
            "英語" => $en
        ];

        $total = 0; // 合計用の箱

        // 6. ループ処理（科目ごとに評価を出し、合計を計算する）
        foreach ($subjects as $subject_name => $score) {
            // 関数を呼び出して評価をもらう
            $grade = getGrade($score);
            
            // 出力
            echo "{$subject_name}：{$score} 点（評価：{$grade}）<br>";
            
            // 合計に足す
            $total += $score;
        }

        // 7. 平均点の計算（合計 ÷ 科目数3）と端数切り捨て
        $average = floor($total / 3);

        echo "<hr>";
        // 8. 最終結果の出力
        echo "<strong>【総合成績】 合計：{$total} 点 / 平均：{$average} 点</strong>";
    }
}
?>