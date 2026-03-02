<form method="POST">
    <label>応募コード：</label>
    <input type="text" name="compaign_code">
    <button type="submit">送信</button>
</form>

<hr>

<?php
//まずはissetで確認
if(isset($_POST["compaign_code"])){
    
    //キャンペーンコードが正しいか確認
    if($_POST["compaign_code"]==="SUMMER2026"){
        echo "キャンペーンへの応募が完了しました！";
    }else{
        echo "無効なコードです";
    }
}

?>