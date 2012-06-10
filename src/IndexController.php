<?php
/**
 * Index controller
 */

use Silex\ControllerCollection;

$indexController = new ControllerCollection();

/**
 * Index
 */
$indexController->get('/', function() {
    return 'Hallo';
});

/**
 * /foo
 */
$indexController->get('/foo/{bar}', function() use ($app) {
    $headline = $app['request']->get('bar');
    return $app['twig']->render('index.foo.twig', array(
        'headline' => $headline
    ));
});

return $indexController;