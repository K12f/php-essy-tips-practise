<?php

$a = true ? 0 : true ? 1 : 2;

var_dump($a);

$a = 1;
echo $a + $a++; // may print either 2 or 3

$i = 1;
$array[$i] = $i++;

var_dump($array);