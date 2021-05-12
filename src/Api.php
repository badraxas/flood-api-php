<?php

namespace Badraxas\FloodApi;

class Api {

    public function __construct(string $base_uri)
    {
        $this->Auth = new Endpoint\Auth($base_uri);
    }

}