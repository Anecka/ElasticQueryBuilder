<?php 

namespace PHPFluent\ElasticQueryBuilder;

use stdClass;

/**
 * Match representation
 *
 * @author Andrew Clinton <ddrew.clinton@gmail.com.
 */
class Match
{
	/**
	 * @var stdClass The input representation
	 */
	public $match;

	/**
     * {@inherit}.
     *
     * @param string $field The attribute name
     * @param mixed  $value The attribute value
     */
	public function __construct(string $field = '', $value)
	{
		$this->match = new stdClass;
		$this->match->$field = $value;
	}
}