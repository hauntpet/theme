<?php

namespace HauntPet\Theme\Facades;

use Illuminate\Support\Facades\Facade;

class Repository extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'haunt-theme-repository';
    }
}
