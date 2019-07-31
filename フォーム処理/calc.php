<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>フォーム処理の基本(POST)</title>
</head>
<body>
<div>
<?php
    // フォーム入力の値を取る
    $tanka = $_POST["tanka"];
    $kosu = $_POST["kosu"];
    // 計算
    $price = $tanka * $kosu;
    // 表示
    $tanka = number_format($tanka);
    $kosu = number_format($kosu);

    echo "単価{$tanka}円 × {$kosu}個は{$price}円です。"
?>
</div>
</body>
</html>