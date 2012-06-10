<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

$app = require __DIR__ . '/src/app.php';
$app->run();