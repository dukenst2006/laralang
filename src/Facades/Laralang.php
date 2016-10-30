<?php

namespace Aitor24\Laralang\Facades;

use Aitor24\Laralang\Builder;
use Illuminate\Support\Facades\Facade;

class Laralang extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Builder::class;
    }
}
