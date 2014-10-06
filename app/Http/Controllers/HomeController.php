<?php namespace migrationInjectionPlay\Http\Controllers;

use Illuminate\Routing\Controller;

use migrationInjectionPlay;

class HomeController extends Controller {

	public function __construct(migrationInjectionPlay\NewClass $newClass){

		$this->newClass = $newClass;
	}

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	$router->get('/', 'HomeController@index');
	|
	*/


	public function test1(){

		// new class utilization using new keyword
		
		$newClass = new migrationInjectionPlay\NewClass;
		
		dd($newClass->message);
	}



	public function test2(){

		// new class using ___constructor method *(construtor method line 9)*
		
		dd($this->newClass->message);

	}



	public function test3(migrationInjectionPlay\NewClass $newClass){

		// new class using method injection from Laravel 5
		
		dd($newClass->message);

	}

}
