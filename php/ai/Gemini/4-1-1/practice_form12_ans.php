<form method="POST" action="">
    <label>車種（コンパクト/スタンダード/ミニバン）：</label>
    <input type="text" name="car_type" placeholder="こんにちわ"><br>
    <label>利用日数（日）：</label>
    <input type="text" name="days"><br>
    <label>免責補償（はい/いいえ）：</label>
    <input type="text" name="insurance"><br>
    <button type="submit">見積もりを出す</button>
</form>

<hr>

<?php
//issetで確認
if(isset($_POST["car_type"])&&isset($_POST["days"])&&isset($_POST["insurance"])){

    //変数代入
    $car_type=$_POST["car_type"];
    $days=$_POST["days"];
    $insurance=$_POST["insurance"];

    //1日あたりの料金を取得
    $daily_rate=match($car_type){
        "コンパクト"=>5000,
        "スタンダード"=>7000,
        "ミニバン"=>10000,
        default=>0
    };    

    //バリデーション（エラーチェック）
    if($daily_rate===0){

        //エラーの場合ここで終了
        echo "車種を正しく入力してください。";

    }else{

        //====エラーがない場合以下の計算を行う。====//

        //車両代（小計）の計算
        $car_subtotal=$daily_rate*$days;

        //利用日数による値引き
        if($days>=7){
            $car_subtotal*=0.9;
            echo "利用日数による値引きが適用されました<br>";
        }

        //保険オプションの有無
        $insurance_fee=0;
        if($insurance==="はい"){
            $insurance_fee=$days*1000;
            echo "保険オプションが適用されました<br>";
        }

        //最終的な総合計
        $total_price=$insurance_fee+$car_subtotal;
        
        //表示処理
        echo "レンタカーのお見積り総額は{$total_price}円です";
    }


}
?>