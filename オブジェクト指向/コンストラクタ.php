<?php
// Staffクラス定義
class Staff {
    // インスタンスプロパティ
    public $name;
    public $age;

    // コンストラクタ
    function __construct($name, $age){
        // プロパティに初期値を設定する
        $this->name = $name;
        $this->age = $age;
    }

    // インスタンスメソッド
    public function hello() {
        if (is_null($this->name)) {
            echo "こんにちは！";
        }
        else {
            echo "こんにちは、{$this->name}です！";
        }
    }
}

// Staffクラスのインスタンス作成
$hana = new Staff("はな",21);
$gunji = new Staff("郡司", 26);

// メソッド実行
$hana->hello();
$gunji->hello();
?>