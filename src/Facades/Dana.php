<?php

namespace BlissJaspis\Dana\Facades;

use Illuminate\Support\Facades\Facade;

class Dana extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Dana';
    }
}