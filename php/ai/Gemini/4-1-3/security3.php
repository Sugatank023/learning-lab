<?php
// ユーザーが悪意のあるコード（アラートを表示させるJavaScript）を入力したと仮定します
$bad_input = "<script>alert('ハッキング成功！');</script>";

// ❌ 危険な出力（そのまま出力すると、ブラウザがプログラムとして実行してしまいます）
// echo $bad_input;

// ⭕️ 安全な出力（htmlspecialcharsを通すことで、ただの文字として画面に表示されます）
$safe_input = htmlspecialchars($bad_input, ENT_QUOTES, 'UTF-8');
echo "入力された内容：{$safe_input}"; 
?>