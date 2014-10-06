<?php namespace migrationInjectionPlay;

use Illuminate\Database\Eloquent\Model;




class NewClass extends Model {

	public $baz = 'foo';

	public $foo = 'baz';

	public $message = 'I am a newclass';
}