<?php
require_once("DateTool利用クラス.php");

$myMilk = new Milk();

echo "作成日：", $myMilk->theDate;
echo "\n";
echo "期限日：", $myMilk->limitDate;
?>