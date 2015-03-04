<?php namespace Kyslik\ViewClear;

use Illuminate\Support\ServiceProvider;

class ViewClearServiceProvider extends ServiceProvider {

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
		$this->registerViewClearCommand();
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

	/**
	 * Register the view:clear command.
	 */
	private function registerViewClearCommand()
	{
		$this->app->singleton('command.kyslik.view.clear', function ($app) {
			return $app['Kyslik\ViewClear\Console\ViewClearCommand'];
		});

		$this->commands('command.kyslik.view.clear');
	}

}
