<form method="POST" actuion="">
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
//issetで確認
if(isset($_POST["hourly_wage"])&&isset($_POST["work_hours"])&&isset($_POST["work_days"])){

    //変数に代入
    $hourly_wage=$_POST["hourly_wage"];
    $work_hours=$_POST["work_hours"];
    $work_days=$_POST["work_days"];

    //バリデーション（エラー対策）
    if($work_hours<=0){
        echo "労働時間が正しくありません。";
    }elseif($work_hours>=1){

        //基本給の計算
        $basic_wage=$hourly_wage*$work_hours;//*$work_daysは要らない

        //交通費の計算
        $trans_cost=$work_days*500;

        //交通費の上限設定
        if($trans_cost>10000){
            echo"交通費の上限を超えました。{$trans_cost}円。上限額の10000円に変更されました。<br>";
            $trans_cost=10000;
        }

        //税引き後の基本給
        $tax_basic_wage=$basic_wage*0.9;

        //手取り金額
        $total_wage=$tax_basic_wage+$trans_cost;

        //合計支給額の表示
        echo"今月の手取り給与は{$total_wage}円です。（内交通費{$trans_cost}円）";
    }else{
        echo "労働時間が正しくありません。";
    }
}

?>