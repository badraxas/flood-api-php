<?php

namespace Badraxas\FloodApi\Response;

class Error extends FloodResponse {

    public function __construct(int $http_code, string $response)
    {
        $this->http_code = $http_code;
        $this->response = json_decode($response);
        $this->error = true;
    }

}