# Slim JSON Renderer
A simple JSON Renderer for Slim-Framework

## Install
Run `composer require micschwarz/php-slim-json-render`

## Usage / Example
```php
$app = new \Slim\App();
$app->get('/', function (Request $request, Response $response, array $args) {
    $json = new \JsonRenderer\JsonRenderer($response);

    return $json->render([
        'foo' => 'bar',
        'fiz' => 'baz'
    ]);
});
$app->run();
```