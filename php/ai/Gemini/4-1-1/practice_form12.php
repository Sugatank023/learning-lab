<form method="POST" action="">
    <label>車種（コンパクト/スタンダード/ミニバン）：</label>
    <input type="text" name="car_type"><br>
    <label>利用日数（日）：</label>
    <input tyep="text" name="days"><br>
    <label>免責補償（はい/いいえ）：</label>
    <input type="text" name="insurance"><br>
    <button tyepe="submit">見積もりを出す</button>
</form>


<hr>

<?php

//issetで中身確認
if(isset($_POST["car_type"])&&isset($_POST["days"])&&isset($_POST["insurance"])){

//変数に代入
$car_type=$_POST["car_type"];
$days=$_POST["days"];
$insurance=$_POST["insurance"];

//車種による基本料金
$basic_price=match($car_type){
    "コンパクト"=>5000,
    "スタンダード"=>7000,
    "ミニバン"=>10000,
    default=>0
};

//選択がない場合エラー表示
if($basic_price===0){
    echo"文字を正しく入力してください。<br>";
}

//利用日数の乗算
$basic_price*=$days;

//長期割引
if($days>=7){
    $basic_price*=0.9;
    echo"長期割引が適用されました。<br>";
}

//保険加算
if($insurance==="はい"){
    $basic_price+=$days*1000;
    echo"保険金額が加算されました。<br>";
}

//表示
echo"レンタカーのお見積り総額は{$basic_price}円です。";

}


?>