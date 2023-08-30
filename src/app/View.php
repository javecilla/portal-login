<?php

namespace App;

class View 
{
	public static function render($filename)
	{
		return require_once $filename;
	}

	public static function error() 
	{
		return require_once __DIR__ . '/../../resources/errors/_404.html';
	}
}