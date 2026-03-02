<form method="GET" action="">
    <label>商品検索：</label>
    <input type="text" name="search_query">
    <button type="submit">検索</button>
</form>


<hr>


<?php
if(isset($_GET["search_query"])){
    $prod=$_GET["search_query"];
    echo"『{$prod}』の検索結果一覧";
}


?>