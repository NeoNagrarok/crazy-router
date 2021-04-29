<?php

use Crazy\Router;

class RouterBench
{

    /**
     * @Revs(1000)
     * @Iterations(5)
     */
	public function benchAdd()
	{
		// Crazy\add()["add"]()["add"]()["add"]()["add"]()["run"]();
		$router = new Crazy\Router();
		Crazy\add()['add']()["add"]()["add"]()["add"]()["run"]();
		for ($i = 0; $i < 10000; $i++)
			continue;
	}


    /**
     * @Revs(1000)
     * @Iterations(5)
     */
	public function benchRouter()
	{
		$router = new Crazy\Router();
		Crazy\router('URL1')('URL2')('URL3')();
	}
}

?>