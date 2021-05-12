<?php

namespace Badraxas\FloodApi\Endpoint;

use Badraxas\FloodApi\User;

class Auth extends Endpoint {

    public function authenticate(string $username, string $password): \Badraxas\FloodApi\Response\FloodResponse
    {
        return $this->response($this->GuzzleClient->request('POST', 'auth/authenticate', [
            'json' => [
                'username' => $username,
                'password' => $password,
            ],
        ]));
    }

    public function register(User $User, bool $auth = false): \Badraxas\FloodApi\Response\FloodResponse
    {
        return $this->response($this->GuzzleClient->request('POST', 'auth/register?cookie=' . ($auth ? 'true' : 'false'), [
            'json' => $User,
        ]));
    }

    public function delete(string $username): \Badraxas\FloodApi\Response\FloodResponse
    {
        return $this->response($this->GuzzleClient->request('DELETE', 'auth/users/' . $username));
    }

    public function update(string $username, User $User): \Badraxas\FloodApi\Response\FloodResponse
    {
        return $this->response($this->GuzzleClient->request('PATCH', 'auth/users/' . $username, [
            'json' => $User,
        ]));
    }

    public function verify(): \Badraxas\FloodApi\Response\FloodResponse
    {
        return $this->response($this->GuzzleClient->request('GET', 'auth/verify'));
    }

    public function logout(): \Badraxas\FloodApi\Response\FloodResponse
    {
        return $this->response($this->GuzzleClient->request('GET', 'auth/logout'));
    }

    public function users(): \Badraxas\FloodApi\Response\FloodResponse
    {
        return $this->response($this->GuzzleClient->request('GET', 'auth/users'));
    }

}