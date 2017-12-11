<?php

function myFunction()
{
	echo 'hello world111';
}

class MyClass
{
	public static function myCallbackMethod()
	{
		echo 'hello world222';
	}
}


call_user_func('myFunction');


call_user_func(['MyClass', 'myCallbackMethod']);

$obj = new MyClass();



//useradd -g root -M -d /etc/nginx -s /sbin/nologin shadowjfads1

// JK&fdsa$#112fas