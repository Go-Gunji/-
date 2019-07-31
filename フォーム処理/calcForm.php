<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>フォーム処理の基本(POST)</title>
</head>
<body>
<div>
<form method="POST" action="calc.php">
    <ul>
        <li><label>単価：<input type="number" name="tanka"></label></li>
        <li><label>個数：<input type="number" name="kosu"></label></li>
        <li><input type="submit" value="送信する"></li>
    </ul>
</div>
</body>
</html>