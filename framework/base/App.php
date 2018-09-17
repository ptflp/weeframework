<?php

namespace wee\Base;

/**
 * Base class App
 */
class App
{
	private static $config;
	public static $container;
	public static $controller;
	public static $session;

	public static function run()
	{
		echo 'Run';
	}
}