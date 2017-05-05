<?php

namespace PHPFluent\ElasticQueryBuilder;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
	public function register()
	{
		$this->app->bind('elasticsearch.query.fluent', function ($app) {
			return new Query;
		});
	}
}