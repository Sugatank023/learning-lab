<form method="POST">
    <label>クーポンコード：</label>
    <input type="text" name="coupon_code">
    <button type="submit">適用する</button>
</form>

<hr>

<?php
//1.isset
if(isset($_POST["coupon_code"])){

    //2.受け取ったデータを変数に代入（実務でよくやるテクニック）
    $code=$_POST["coupon_code"];

    //3.条件分岐
    if($code==="NEWYEAR500"){
        echo"500円が割引されました！";
    }elseif($code==="SPECIAL1000"){
        echo "1000円が割引されました！";
    }else{
        echo"無効なクーポンコードです。";
    }
}

?>