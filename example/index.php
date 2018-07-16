<?php

use Slim\Http\Request;
use Slim\Http\Response;

require '../vendor/autoload.php';

$app = new \Slim\App();
$app->get('/', function (Request $request, Response $response, array $args) {
    $json = new \JsonRenderer\JsonRenderer($response);

    return $json->render([
        'foo' => 'bar',
        'fiz' => 'baz'
    ]);
});
$app->run();