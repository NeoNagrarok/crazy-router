<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase
{
	public function testIsInstanceOfRouter()
	{
		$routerTest = new Crazy\Router();
		$this->assertInstanceOf(Crazy\Router::class, $routerTest);
	}

	public function testIsFunctionCanBeTested()
	{
		$this->assertEquals(true, Crazy\test());
	}

	public function testIsFunctionCanReturnFunction()
	{
		$this->assertEquals('test', Crazy\add()["add"]()["add"]()["add"]()["add"]()["run"]());
	}

	public function testIsFunctionCanReturnFunctionConditionaly()
	{
		$this->assertEquals('array', Crazy\router('URL1')('URL2')('URL3')());
	}
}