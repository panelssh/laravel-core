<?php

namespace PanelSsh\Core\Libraries;

use Hidehalo\Nanoid\Client;

class Nanoid
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function generate($size = 21)
    {
        return $this->client->formattedId('1234567890', $size);
    }
}
