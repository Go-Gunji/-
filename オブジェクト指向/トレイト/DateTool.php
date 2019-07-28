<?php
trait DateTool {
    // DateTimeを年月日で返す
    public function ymdString($date) {
        $dateString = $date->format('Y年m月d日');
        return $dateString;
    }

    // 指定日数後の年月美を返す
    public function addYmdString($date, $days) {
        $date->add(new DateInterval("P{$days}D"));
        return $this->ymdString($date);
    }
}
// ?>