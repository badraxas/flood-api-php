<?php

namespace Badraxas\FloodApi\Client;

class rTorrent extends Client {

    private $client = 'rTorrent';
    private $type = 'socket';

    public function __construct(string $socket, int $version = 1)
    {
        $this->socket = $socket;
        $this->version = $version;
    }

    public function jsonSerialize(): array
    {
        return [
            'socket' => $this->socket,
            'type' => $this->type,
            'version' => $this->version,
            'client' => $this->client,
        ];
    }

}