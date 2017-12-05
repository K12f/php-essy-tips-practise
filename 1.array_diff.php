<?php

$array1 = array("a" => "green", "red", "blue", "red",'diff');
$array2 = array("b" => "green", "yellow", "red");

$ret = array_diff($array1,$array2);


var_dump($ret);