<?php

namespace Crazy;

class Router
{
	function __construct()
	{
		
	}
}

function test()
{
	return true;
}

function add()
{
	$test = 'test';

	return [
		'add' => 'Crazy\add',
		'run' => function() use ($test){
			return $test;
		}
	];
}