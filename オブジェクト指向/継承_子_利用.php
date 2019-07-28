<?php
require_once("継承_子.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>クラスを利用する</title>
</head>
<body>
<pre>
<?php
    // Soccerクラスのインスタンス
    $player1 = new Soccer("ゴウ");
    // 親クラスのメソッド
    $player1->who();
    // 子クラスのメソッド
    $player1->play();
?>

<!-- マジックメソッドを試す -->
<?php
    // Soccerクラスインスタンス
    $player2 = new Soccer("リュウジ");
    // __toStringメソッド試す;
    echo "{$player2}";
?>
</pre>
</body>
</html>