<?php
require_once("継承_子2.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>クラスを利用する</title>
</head>
<body>
<pre>
<?php
    // Runnerクラスのインスタンス
    $runner1 = new Runner("ゴウ","26");
    // オーバーライドしたメソッド試す
    $runner1->who();
?>
</pre>
</body>
</html>