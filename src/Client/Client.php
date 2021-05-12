<?php

namespace Badraxas\FloodApi\Client;

abstract class Client implements \JsonSerializable
{

    abstract public function jsonSerialize();

}