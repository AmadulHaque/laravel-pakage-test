<?php

namespace AmadulHaque\LaravelPkgTem\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \adulHaque\LaravelPkgTem\Template
 */
class Template extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-package-template';
    }
}
