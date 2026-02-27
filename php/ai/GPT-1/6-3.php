<?php

//クラス作成
class Movie{

    //プロパティ（変数）
    public $title;
    public $director;
    public $duration;
    
    //コンストラクタ
    public function __construct($title,$director,$duration)
    {
        $this->title=$title;
        $this->director=$director;
        $this->duration=$duration;
    }
    
    //メソッド（関数）作成
    public function info(){
        return "{$this->title}(監督：{$this->director})は{$this->duration}分の映画です。";
    }
}

//オブジェクト（実体）の作成
$movie=new Movie("風立ちぬ","宮崎駿",120);
//オブジェクトの表示
echo "<h1>".$movie->info()."</h1>";

?>