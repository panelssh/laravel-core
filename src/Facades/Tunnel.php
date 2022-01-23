<?php

namespace PanelSsh\Core\Facades;

use Closure;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \PanelSsh\Core\Libraries\Tunnel setHost(string $host)
 * @method static \PanelSsh\Core\Libraries\Tunnel setPort(int $port)
 * @method static \PanelSsh\Core\Libraries\Tunnel setUsername(string $username)
 * @method static \PanelSsh\Core\Libraries\Tunnel setPassword(string $password)
 * @method static \PanelSsh\Core\Libraries\Tunnel setCommand(string $command)
 * @method static \PanelSsh\Core\Libraries\Tunnel setPayload(array $host)
 * @method static \PanelSsh\Core\Libraries\Tunnel connect(Closure $callback = null)
 * @see \PanelSsh\Core\Libraries\Tunnel
 */
class Tunnel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tunnel';
    }
}
