<?php

namespace PanelSsh\Core\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string generate()
 */
class Nanoid extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'nanoid';
    }
}
