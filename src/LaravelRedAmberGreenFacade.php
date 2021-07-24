<?php

namespace Ontherocksoftware\LaravelRedAmberGreen;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ontherocksoftware\LaravelRedAmberGreen\LaravelRedAmberGreen
 */
class LaravelRedAmberGreenFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-red-amber-green';
    }
}
