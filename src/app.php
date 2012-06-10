<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\FormServiceProvider;

$app = new Application();

$twigService = new TwigServiceProvider();
$app->register($twigService, array(
    'twig.path' => __DIR__ . '/views'
));

$indexController = require __DIR__ . '/IndexController.php';
$app->mount('/index', $indexController);

return $app;