<?php
require_once '../vendor/autoload.php';
require_once '../env.php';

use Google\Client;
use Google\Service\YouTube;
use Google\Service\Exception;

# Configs
$apiKey = $KEY;

# Initialize Youtube API CLient
$client = new Client();
$client->setDeveloperKey($apiKey);
$service = new YouTube($client);