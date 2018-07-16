<?php

namespace JsonRenderer;

use Slim\Http\Response;

class JsonRenderer
{
    /**
     * @var Response
     */
    private $response;

    /**
     * Json constructor.
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @param array $data
     * @param int   $status
     * @return Response
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function render($data, $status = 200): Response
    {
        $json = [
            'data'   => $data,
            'status' => $status
        ];
        $this->response = $this->response->withHeader('Content-type', 'application/json');
        $this->response = $this->response->withJson($json, $status, JSON_NUMERIC_CHECK | JSON_PRESERVE_ZERO_FRACTION);

        return $this->response->withStatus($status);
    }
}