<?php
use PDFfiller\OAuth2\Client\Provider\FillRequest;

$provider = require_once __DIR__ . '/../bootstrap/initWithFabric.php';
$e = FillRequest::all($provider);
dd($e);
