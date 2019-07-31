<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>XSS対策 es()</title>
</head>
<body>
<div>
<pre>
<?php
require_once("util.php");

//HTMLタグの入ったデータ用意
$myCode = "<h2>テスト1</h2>";
$myArray = ["a"=>"<p>赤</p>","b"=>"<script>aleat('hello')</script>"];

// esでエスケープ
echo '$myCodeの値：', es($myCode);
echo "\n\n";
echo '$myArrayの値：';
print_r(es($myArray));
?>
</pre>
</div>
</body>
</html>