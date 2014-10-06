<?php namespace migrationInjectionPlay\Providers;

use Illuminate\Foundation\Support\Providers\FilterServiceProvider as ServiceProvider;

class FilterServiceProvider extends ServiceProvider {

	/**
	 * The filters that should run before all requests.
	 *
	 * @var array
	 */
	protected $before = [
		'migrationInjectionPlay\Http\Filters\MaintenanceFilter',
	];

	/**
	 * The filters that should run after all requests.
	 *
	 * @var array
	 */
	protected $after = [
		//
	];

	/**
	 * All available route filters.
	 *
	 * @var array
	 */
	protected $filters = [
		'auth' => 'migrationInjectionPlay\Http\Filters\AuthFilter',
		'auth.basic' => 'migrationInjectionPlay\Http\Filters\BasicAuthFilter',
		'csrf' => 'migrationInjectionPlay\Http\Filters\CsrfFilter',
		'guest' => 'migrationInjectionPlay\Http\Filters\GuestFilter',
	];

}
