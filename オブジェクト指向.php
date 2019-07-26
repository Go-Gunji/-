<?php
// クラス定義
// Staffクラスを定義
class Staff {
    // インスタンスプロパティ
    public $name;
    public $age;

    // インスタンスメソッド
    public function hello() {
        if (is_null($this->name)) {
            echo "こんにちは";
        }
        else {
            echo "こんにちは、 {$this->name}です！";
        }
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>クラスを定義する</title>
</head>
<body>
<pre>
<?php
    // Staffクラスインスタンスの作成
    $hana = new Staff();
    $gunji = new Staff();

    // プロパティの設定
    $hana->name = "花";
    $hana->age = 21;

    $gunji->name = "郡司";
    $gunji->age=26;

    // インスタンスの確認
    print_r($hana);
    print_r($gunji);

    // メソッド実行
    $hana->hello();
    $gunji->hello();
?>
</pre>
</body>
</html>