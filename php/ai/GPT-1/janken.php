

<?php
/*
$hand=["グー","チョキ","パー"];

$com =array_rand($hand,1);
echo "comの手".$com;
$me =array_rand($hand,1);
echo "自分の手",$me;

echo "<hr>";

if($me==$com){
    echo "引き分け";
//私がグー
}elseif($me="グー"){
    if($com="チョキ"){//comがチョキ
        echo "私の勝ち,相手の負け";
    }else{//comがパー
        echo"私の負け,相手の勝ち";
    }
//私がチョキ
}elseif($me="チョキ"){
    if($com="グー"){
        echo"私の負け,相手の勝ち";
    }else{
        echo"私の勝ち,相手の負け";
    }
//私がパー
}else{
    if($com="グー"){
        echo "私の勝ち,相手の負け";
    }else{
        echo"私の負け,相手の勝ち";
    }
}
*/

///ここからGPT
$hand = ["グー", "チョキ", "パー"];

// ランダムでインデックスを取得
$com_index = array_rand($hand);
$me_index = array_rand($hand);

// 実際の手を取得
$com = $hand[$com_index];//番号から配列の中身を取得
$me  = $hand[$me_index];

// 表示
echo "<p>comの手：{$com}</p>";
echo "<p>自分の手：{$me}</p>";
echo "<hr>";

// 勝敗判定
if ($me === $com) {
    echo "結果：引き分け";
} elseif (
    ($me === "グー" && $com === "チョキ") ||
    ($me === "チョキ" && $com === "パー") ||
    ($me === "パー" && $com === "グー")
) {
    echo "結果：あなたの勝ち！";
} else {
    echo "結果：あなたの負け！";
}



?>