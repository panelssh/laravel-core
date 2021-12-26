<?php

namespace PanelSsh\Core\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PanelSsh\Core\Libraries\Tunnel
 */
class Tunnel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tunnel';
    }
}
