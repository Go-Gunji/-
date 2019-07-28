<?php
require_once("継承_親.php");

class Soccer extends Player {
    // インスタンスメソッド
    public function play() {
        echo "{$this->name}がシュート！";
    }
}
// ?>