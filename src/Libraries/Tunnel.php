<?php

namespace PanelSsh\Core\Libraries;

use Closure;
use Collective\Remote\RemoteManager;

class Tunnel
{
    protected RemoteManager $remoteManager;

    private string $host;

    private int $port = 22;

    private string $username;

    private string $password;

    private string $command;

    private array $payload = [];

    public function __construct(RemoteManager $remoteManager)
    {
        $this->remoteManager = $remoteManager;
    }

    public function setHost(string $host): Tunnel
    {
        $this->host = $host;
        return $this;
    }

    public function setPort(int $port): Tunnel
    {
        $this->port = $port;
        return $this;
    }

    public function setUsername(string $username): Tunnel
    {
        $this->username = $username;
        return $this;
    }

    public function setPassword(string $password): Tunnel
    {
        $this->password = $password;
        return $this;
    }

    public function setCommand(string $command): Tunnel
    {
        $this->command = $command;
        return $this;
    }

    public function setPayload(array $payload): Tunnel
    {
        $this->payload = $payload;
        return $this;
    }

    public function connect(Closure $callback = null)
    {
        $this->remoteManager->connect([
            'host' => $this->host,
            'port' => $this->port,
            'username' => $this->username,
            'password' => $this->password,
        ])->run(strtr($this->command, $this->payload), $callback);
    }
}
