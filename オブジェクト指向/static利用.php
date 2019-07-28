<?php
require_once("static定義.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Staffクラスメンバーを使う</title>
</head>
<body>
<pre>
<?php
// クラスメソッド実行
Staff::deposit(100);
Staff::deposit(50);

// クラスプロパティ確認
echo Staff::$piggyBank, "円になりました。";

// インスタンスを作る
$gunji = new Staff("郡司", 26);
// インスタンスメソッドを実行
$gunji->latePenalty();
// クラスプロパティ確認
echo Staff::$piggyBank, "円になりました。"
?>
</pre>
</body>
</html>