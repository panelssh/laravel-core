<?php

namespace PanelSsh\Core\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PanelSsh\Core\Libraries\Socket
 */
class Socket extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'socket';
    }
}
