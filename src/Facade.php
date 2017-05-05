<?php

namespace PHPFluent\ElasticQueryBuilder;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{
	protected static function getFacadeAccessor()
	{
		return 'elasticsearch.query.fluent';
	}
}