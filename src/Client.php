<?php

namespace Riotgames\Api;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    public function __construct()
    {
        $this->client = new GuzzleClient();
    }
}
