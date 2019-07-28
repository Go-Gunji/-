<?php
require_once("TaroTool.php");
require_once("GoTool.php");

class MyClass {
    use TaroTool, GoTool {
        GoTool::hello insteadof TaroTool;
    }
}
// ?>