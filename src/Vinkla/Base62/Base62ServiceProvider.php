<?php namespace Vinkla\Base62;

use Illuminate\Support\ServiceProvider;

class Base62ServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Register 'base62' instance container to our Base62 object
		$this->app['base62'] = $this->app->share(function($app)
		{
			return new Vinkla\Base62\Base62;
		});

		// Shortcut so developers don't need to add an Alias in app/config/app.php
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Base62', 'Vinkla\Base62\Facades\Base62');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('base62');
	}
}
