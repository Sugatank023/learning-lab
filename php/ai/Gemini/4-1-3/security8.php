<form method="POST" action="">
    <label>社員名：</label>
    <input type="text" name="emp_name"><br>
    <label>身長（cm）：</label>
    <input type="number" name="height_cm"><br>
    <label>体重（kg）：</label>
    <input type="number" name="weight_kg"><br>
    <button type="submit">判定する</button>
</form>

<hr>

<?php
//関数の作成
function caluculateBMI($height_cm,$weight_kg){
    $height_m=$height_cm/100;
    $bmi=$weight_kg/$height_m*$height_m;
    return $bmi;
};
//issetで確認
if(isset($_POST["emp_name"],$_POST["height_cm"],$_POST["weight_kg"])){
    //変数代入（サニタイズ）
    $weight_kg=htmlspecialchars($_POST["emp_name"],ENT_QUOTES,'UTF-8');
    $height_cm=htmlspecialchars($_POST["height_cm"],ENT_QUOTES,'UTF-8');
    $emp_name=htmlspecialchars($_POST["weight_kg"],ENT_QUOTES,'UTF-8');
    //ガード節
    if(empty($_POST["emp_name"]) or $height_cm<=0 or $weight_kg<=0){
        echo"入力エラー<br>!正しい値を入れてください!<br>";
        exit();
    }else{
        //BMIの計算
        $bmi=caluculateBMI($height_cm,$weight_kg);
        //小数点の調整
        $bmi=round($bmi,1);
        //BMIの条件判定
        if($bmi>=25){
            $status="肥満";
        }elseif($bmi>=18.5){
            $status="普通体重";
        }else{
            $status="低体重（瘦せ型）";
        }
        //出力部分
        echo"【{$emp_name}さんの診断結果】<br>BMI値：{$bmi}<br>判定：{$status}";
    }
}

?>