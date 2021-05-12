<?php

namespace Badraxas\FloodApi\Client;

class rTorrentTcp extends Client {

    private $client = 'rTorrent';
    private $type = 'tcp';

    public function __construct(string $host, int $port, int $version = 1)
    {
        $this->host = $host;
        $this->port = $port;
        $this->version = $version;
    }

    public function jsonSerialize(): array
    {
        return [
            'client' => $this->client,
            'host' => $this->host,
            'port' => $this->port,
            'type' => $this->type,
            'version' => $this->version,
        ];
    }

}