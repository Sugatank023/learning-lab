<?php

//クラス作成
class Book{
    
    //プロパティ（変数）作成
    public $title;
    public $author;
    public $price;
    
    //コンストラクタ
    public function __construct($title,$author,$price)
    {
        $this->title=$title;//銀河鉄道の夜をプロパティ（変数）に代入
        $this->author=$author;
        $this->price=$price;
    }
    
    //メソッド（関数）の作成
    public function info(){
        return"{$this->title}(著：{$this->author})は{$this->price}円です";
    }
}

//オブジェクト（実体）の作成
$book=new Book("銀河鉄道の夜","宮沢賢治",800);
//オブジェクト表示
echo "<h1>".$book->info()."</h1>";

?>