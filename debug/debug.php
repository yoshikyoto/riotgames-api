<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Yoshikyoto\Riotgames\Api\Client;

$client = new Client('RGAPI-5769528a-c75b-472e-924e-bcfedbb670c3');
$summoner = $client->getSummoner('うたかた');
$masteries = $client->getChampionMastery($summoner->getId());
var_dump($masteries);
