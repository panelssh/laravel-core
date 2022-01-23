<?php

namespace PanelSsh\Core\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \PanelSsh\Core\Libraries\Socket setHost(string $host)
 * @method static \PanelSsh\Core\Libraries\Socket setPort(int $port)
 * @method static \PanelSsh\Core\Libraries\Socket setSecretKey(string $secretKey)
 * @method static \PanelSsh\Core\Libraries\Socket setCommand(string $command)
 * @method static \PanelSsh\Core\Libraries\Socket setPayload(array $host)
 * @method static object connect()
 * @see \PanelSsh\Core\Libraries\Socket
 */
class Socket extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'socket';
    }
}
