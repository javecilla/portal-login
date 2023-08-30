<?php

namespace App;

use App\View;

class Router
{
  public static function handle($method, $path, $filename)
  {
  	$cMethod = $_SERVER['REQUEST_METHOD'];
  	$cURI = $_SERVER['REQUEST_URI'];
  	$registerPath = ['/auth/login/'];
  	//check request method
  	if($cMethod === $method) {
  		//check request uri
	  	if(in_array($cURI, $registerPath)) {
	  		if($cURI === $path) {
	  			View::render($filename);
		  		return true;
	  		} else {
	  			return false;
	  		}
	  	} else {
	  		View::error();
	  		return false;	
	  	}
	  } else {
	  	return false;
	  }
  }
}
