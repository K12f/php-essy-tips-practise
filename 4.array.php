<?php

// 引用改变值

$colors = ['white', 'black', 'gray', 'orange'];

foreach ($colors as $color) {
	$color = strtolower($color);
}

var_dump($colors);
//var_dump($color);
unset($color);

foreach ($colors as $key => $color) {
	$colors[$key] = strtoupper($color);
}

var_dump($color);
var_dump($colors);