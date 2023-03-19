<?php

namespace VladislavsPoznaks\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VladislavsPoznaks\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \VladislavsPoznaks\Example\Example::class;
    }
}
