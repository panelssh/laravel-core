<?php

namespace PanelSsh\Core\Libraries;

use Closure;

class Socket
{
    private string $host = '0.0.0.0';

    private int $port = 3000;

    private string $secretKey;

    private string $command;

    private array $payload = [];

    public function setHost(string $host): Socket
    {
        $this->host = $host;
        return $this;
    }

    public function setPort(int $port): Socket
    {
        $this->port = $port;
        return $this;
    }

    public function setSecretKey(string $secretKey): Socket
    {
        $this->secretKey = $secretKey;
        return $this;
    }

    public function setCommand(string $command): Socket
    {
        $this->command = $command;
        return $this;
    }

    public function setPayload(array $payload): Socket
    {
        $this->payload = $payload;
        return $this;
    }

    public function connect(): object
    {
        $request = json_encode((object) [
            'request_id' => nanoid(),
            'secret_key' => $this->secretKey,
            'command' => strtr($this->command, $this->payload),
        ]);

        $socket = socket_create(AF_INET, SOCK_STREAM, 0);

        if (@socket_connect($socket, $this->host, $this->port)) {
            socket_write($socket, $request, strlen($request));

            return json_decode((string) socket_read($socket, 2147483647));
        }

        return (object) [
            'success' => false,
            'message' => 'Unable connect to server',
            'output' => '',
        ];
    }
}
