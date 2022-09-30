<?php


declare(strict_types = 1);


/**
 * Map request method/uri to a controller/action.
 */


return [
    ['POST', '/example/create', ['Example\Controller\ExampleController', 'createExample']],
    ['POST', '/example/sum', ['Example\Controller\ExampleController', 'sum']],
    ['GET', '/', ['Example\Controller\HomeController', 'index']]
];
