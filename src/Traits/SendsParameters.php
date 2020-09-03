<?php

namespace Amchara\LaravelGmail\Traits;

use Illuminate\Support\Arr;

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
        if (isset($this->params[$column])) {
            if ( $column === 'pageToken' ) {
                $this->params[$column] = $query;
            } else {
                $this->params[$column] = "{$this->params[$column]} $query";
            }
        } else {
            $this->params = Arr::add($this->params, $column, $query);
        }
    }

    public function addPageToken( $token )
    {
        $this->params[ 'pageToken' ] = $token;
    }
}
