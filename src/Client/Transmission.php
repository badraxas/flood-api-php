<?php

namespace Badraxas\FloodApi\Client;

class Transmission extends Client {

    protected $type = 'rpc';
    private $client = 'Transmission';

    public function __construct(string $username, string $password, string $url, int $version = 1)
    {
        $this->username = $username;
        $this->password = $password;
        $this->url = $url;
        $this->version = $version;
    }

    public function jsonSerialize(): array
    {
        return [
            'username' => $this->username,
            'password' => $this->password,
            'url' => $this->url,
            'version' => $this->version,
            'client' => $this->client,
            'type' => $this->type,
        ];
    }

}