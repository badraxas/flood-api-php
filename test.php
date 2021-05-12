<?php

use Badraxas\FloodApi\Client\rTorrent;
use Badraxas\FloodApi\Client\Transmission;
use Badraxas\FloodApi\Right;
use Badraxas\FloodApi\User;

require_once 'vendor/autoload.php';

$FloodApi = new \Badraxas\FloodApi\Api('http://localhost:3000/api/');
$FloodApi->Auth->register(new User('bastien', 'bastien', new rTorrent('./socket.socket'), Right::ADMINISTRATOR), true);
var_dump($FloodApi->Auth->users());

