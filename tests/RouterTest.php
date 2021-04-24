<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase
{
	public function testIsInstanceOfRouter()
	{
		$routerTest = new Crazy\Router();
		$this->assertInstanceOf(Crazy\Router::class, $routerTest);
	}
}