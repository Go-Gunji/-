<?php
// Staffクラス定義
class Staff {

    // クラスプロパティ
    public static $piggyBank = 0;

    //クラスメソッド
    public static function deposit(int $yen) {
        self::$piggyBank += $yen;
    }
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
    
    // 遅刻したら罰金
    public function latePenalty() {
        self::deposit(1000);
    }
}

// ?>