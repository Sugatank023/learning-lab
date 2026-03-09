<form method="POST" action="">
    <label>学生の名前：</label>
    <input type="text" name="student_name"><br>
    <label>国語の点数：</label>
    <input type="text" name="score_ja"><br>
    <label>数学の点数：</label>
    <input type="text" name="score_math"><br>
    <label>英語の点数</label>
    <input type="text" name="score_en"><br>
    <button type="submit">成績レポートを作成する</button>
</form>
<hr>
<?php

//関数の定義
function getGrade($score){
    if($score>=80){
        return"A";
    }elseif($score>=60){
        return"B";
    }else{
        return"C";
    }
}

//issetで確認
if(isset($_POST["student_name"],$_POST["score_ja"],$_POST["score_math"],$_POST["score_en"])){
    //変数を代入（サニタイズ）
    $student_name=htmlspecialchars($_POST["student_name"],ENT_QUOTES,'UTF-8');
    $score_ja=htmlspecialchars($_POST["score_ja"],ENT_QUOTES,'UTF-8');
    $score_math=htmlspecialchars($_POST["score_math"],ENT_QUOTES,'UTF-8');
    $score_en=htmlspecialchars($_POST["score_en"],ENT_QUOTES,'UTF-8');
    //バリデーション
    if(empty($student_name)){
        echo"名前を入力してください。";
    }else{
        //連想配列に代入
        $scores=[
            "国語"=>$score_ja,
            "数学"=>$score_math,
            "英語"=>$score_en
        ];
        //合計点を入れる変数
        $total=0;
        //連想配列のループ処理
        foreach($scores as $subject=>$score){
            $evl=getGrade($score);
            echo"{$subject}（科目名）：{$score}点（評価：{$evl}）<br>";
            $total+=$score;
        }
        //平均点の算出
        $avg=$total/3;
        //端数処理
        $avg_f=floor($avg);
        //総合表示
        echo "<br>【{$student_name}さんの総合成績】合計：{$total}点/平均：{$avg_f}点";
    }
    
}


?>