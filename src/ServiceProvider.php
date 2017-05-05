<?php

namespace PHPFluent\ElasticQueryBuilder;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
	protected $defer = true;

	public function register()
	{
		$this->app->bind(Query::class, function ($app) {
			return new Query;
		});
	}

	public function provides()
	{
		return [Query::class];
	}
}