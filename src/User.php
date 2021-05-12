<?php

namespace Badraxas\FloodApi;

use Badraxas\FloodApi\Client\Client;

class User {

    public function __construct(string $username, string $password, Client $client, int $level = Right::USER)
    {
        $this->username = $username;
        $this->password = $password;
        $this->client = $client;
        $this->level = $level;
    }

    public function jsonSerialize(): array
    {
        return [
            'username' => $this->username,
            'password' => $this->password,
            'client' => $this->client,
            'level' => $this->level,
        ];
    }

}