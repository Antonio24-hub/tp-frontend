<?php

namespace app\controllers;
use flight\Engine;

class ApiExampleController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	function renderHome()
	{
		$this->app->render('index.php');
	}
}