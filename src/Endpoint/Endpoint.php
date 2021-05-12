<?php

namespace Badraxas\FloodApi\Endpoint;

use \Psr\Http\Message\ResponseInterface;

abstract class Endpoint {

    protected $GuzzleClient;
    protected static $CookieJar;

    public function __construct(string $base_uri)
    {
        self::$CookieJar = new \GuzzleHttp\Cookie\CookieJar();
        $this->GuzzleClient = new \GuzzleHttp\Client([
            'base_uri' => $base_uri,
            'timeout' => 2.0,
            'http_errors' => false,
            'cookies' => self::$CookieJar,
        ]);
    }

    protected function response(ResponseInterface $response): \Badraxas\FloodApi\Response\FloodResponse
    {
        if ($response->getStatusCode() === 200) {
            return new \Badraxas\FloodApi\Response\Success($response->getStatusCode(), $response->getBody());
        }

        return new \Badraxas\FloodApi\Response\Error($response->getStatusCode(), $response->getBody());
    }

}