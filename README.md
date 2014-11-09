# Drupal 7 module with Composer
================

This module uses [Composer](http://getcomposer.com/) in order to manage PHP packages. 

## Installation.

Copy file composer.example.json to your Drupal root director an rename it to compose.json.

Set the path where your modules is installed. You need to point the "src" folder inside the module.

	"psr-4": {
	    "custom_log\\" : "sites/all/modules/custom/custom_log/src"
	}

You can define all namespaces that you need.

	"psr-4": {
	    "module_one\\" : "sites/all/modules/custom/module_one/src",
	    "module_two\\" : "sites/all/modules/custom/module_two/src",
	    "module_three\\" : "profiles/malotor/modules/module_three/src",
	}

Execute composer

	$ composer install

Add autoloader to your modules

	<?php

		/**
		 * @file custom_log.module
		 *
		 */

		require DRUPAL_ROOT . '/vendor/autoload.php';

		use custom_log\CustomLog;

		/**
		 * Implementation of hook_init().
		 */
		function custom_log_init() {
		  CustomLog::log("Module Logger inicializated");
		}

We can create our classes in src folder an load it using "use" statement

	use custom_log\CustomLog;


In this example we create a wrapper for Monolog package ( CustomLog Class )