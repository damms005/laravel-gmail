<?php

namespace Amchara\LaravelGmail\Traits;

trait SendsParameters
{

	/**
	 * Adds parameters to the parameters property which is used to send additional parameters in the request.
	 *
	 * @param $query
	 * @param  string  $column
	 */
	public function add($query, $column = 'q')
	{
		if (isset($this->params[$column]) && $column != 'pageToken') {
			$this->params[$column] = "{$this->params[$column]} $query";
		} else {
			$this->params = array_add($this->params, $column, $query);
		}
	}
}
