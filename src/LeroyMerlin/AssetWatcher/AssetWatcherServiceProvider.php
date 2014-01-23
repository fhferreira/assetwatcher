<?php namespace LeroyMerlin\AssetWatcher;

use Illuminate\Support\ServiceProvider;

class AssetWatcherServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('leroy-merlin-br/assetwatcher');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['command.assetwatcher'] = $this->app->share(function($app)
        {
            return new AssetWatcherCommand;
        });

		$this->commands('command.assetwatcher');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
