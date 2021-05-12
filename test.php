<?php

use Badraxas\FloodApi\Client\rTorrent;
use Badraxas\FloodApi\Client\Transmission;
use Badraxas\FloodApi\Right;
use Badraxas\FloodApi\User;

require_once 'vendor/autoload.php';

$FloodApi = new \Badraxas\FloodApi\Api('http://localhost:3000/api/');
var_dump($FloodApi->Auth->authenticate('bastien', 'bast62'));
var_dump($FloodApi->Auth->users());
var_dump($FloodApi->Auth->update('juju', new User('Justin', 'gugu', new rTorrent('./socket.socket'))));
var_dump($FloodApi->Auth->users());

