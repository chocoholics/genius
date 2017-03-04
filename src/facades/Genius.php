<?php

namespace Dawson\Genius\Facades;

use Illuminate\Support\Facades\Facade;

class Genius extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'genius';
    }
}