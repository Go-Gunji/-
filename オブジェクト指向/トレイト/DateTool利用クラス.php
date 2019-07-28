<?php
require_once("DateTool.php");

class Milk {
    use DateTool;

    public $theDate;
    public $limitDate;

    function __construct() {
        //　現在の日付
        $now = new DateTime();

        // 年月日に直す
        $this->theDate = $this->ymdString($now);

        // 10日後の日付
        $this->limitDate = $this->addYmdString($now, 10);
    }
}

// ?>