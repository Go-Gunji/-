<?php
require_once("継承_子.php");

// Runnerクラス定義
class Runner extends Player {
    // プロパティ
    public $age;

    // コンストラクタ
    function __construct($name, $age){
        // 親クラスのコンストラクタ
        parent::__construct($name);
        // プロパティに初期値を設定
        $this->age = $age;
    }

    // オーバーライド
    public function who() {
        echo "{$this->name},{$this->age}歳です。";
    }

    // インスタンスメソッド
    public function play() {
        echo "{$this->name}が走る！";
    }
}

// ?>