<?php

$provider = require_once __DIR__.'/../bootstrap/initWithFabric.php';
$documentEntity = new \PDFfiller\OAuth2\Client\Provider\Document($provider);

$e = $documentEntity->itemsList();
dd($e);