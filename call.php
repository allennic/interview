<?php
require('test.php');

$arr = array('a' => 'A', 'b' => 'B');
$test = New Test();
$test::retain_key_shuffle($arr);
var_export($arr);