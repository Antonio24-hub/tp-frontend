<?php

if (empty($app) === true) {
	$app = Flight::app();
}


$app->path(__DIR__ . $ds . '..' . $ds . '..');

// Core config variables
$app->set('flight.base_url', '/',);           // Base URL for your app. Change if app is in a subdirectory (e.g., '/myapp/')
$app->set('flight.case_sensitive', false);    // Set true for case sensitive routes. Default: false
$app->set('flight.log_errors', true);         // Log errors to file. Recommended: true in production
$app->set('flight.handle_errors', false);     // Let Tracy handle errors if false. Set true to use Flight's error handler
$app->set('flight.views.path', __DIR__ . $ds . '..' . $ds . 'views'); // Path to views/templates
$app->set('flight.views.extension', '.php');  // View file extension (e.g., '.php', '.latte')
$app->set('flight.content_length', false);    // Send content length header. Usually false unless required by proxy

// Generate a CSP nonce for each request and store in $app
$nonce = bin2hex(random_bytes(16));
$app->set('csp_nonce', $nonce);
// Make csp_nonce available to all views globally
$app->view()->set('csp_nonce', $nonce);

/**********************************************
 *           User Configuration               *
 **********************************************/
return [
	/**************************************
	 *         Database Settings          *
	 **************************************/
	'database' => [
		// MySQL Example:
		'host'     => '127.0.0.1',
		'dbname'   => 'supermarche',
		'user'     => 'root',
		'password' => '',

		// SQLite Example:
		// 'file_path' => __DIR__ . $ds . '..' . $ds . 'database.sqlite', // Path to SQLite file
	],

	
];
