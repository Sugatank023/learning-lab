
<?php
session_start();

if(isset($_POST["user_name"])){
    $user_name=htmlspecialchars($_POST["user_name"],ENT_QUOTES,'UTF-8');
    $_SESSION["user_name"]=$user_name;
}else{
    echo"エラー！！データが届いていません！！";
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>好きな食べ物ページ</title>
</head>
<body>
    <h1>好きな食べ物入力フォーム</h1>
    <hr>
    <form method="POST" action="result.php">
        <label>好きな食べ物：</label>
        <input type="text" name="fav_food">
        <button type="submit">登録</button>
    </form>
</body>
</html>