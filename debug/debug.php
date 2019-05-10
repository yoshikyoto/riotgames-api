<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Yoshikyoto\Riotgames\Api\Client;

$client = new Client('RGAPI-5769528a-c75b-472e-924e-bcfedbb670c3');
$r = $client->getChampions('9.9.1', 'ja_JP');
var_dump($r);
