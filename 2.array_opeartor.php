<?php

$a = [
	'a' => 'apple',
	'b' => 'banana'
];
$b = ['a' => 'pear', 'b' => 'sta', 'c' => 'ch'];

var_dump($a+$b);

var_dump($b+$a);

var_dump($a+=$b);

var_dump($a == $b);