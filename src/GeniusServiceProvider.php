<?php

namespace Dawson\Genius;

use Illuminate\Support\ServiceProvider;

class GeniusServiceProvider extends ServiceProvider
{
	/**
	* Register bindings in the container.
	*
	* @return void
	*/
	public function register()
	{
		$this->app->singleton('genius', function($app) {
			return new Genius;
		});
	}

	/**
	* Perform post-registration booting of services.
	*
	* @return void
	*/
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../config/genius.php' => config_path('genius.php'),
		], 'config');
	}
}