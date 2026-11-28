<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function ($app) {
    $app->get('/ping', function (Request $request, Response $response) {
        $response->getBody()->write(json_encode([
            'servicio' => 'ms-auth',
            'estado'   => 'ok'
        ]));
        return $response->withHeader('Content-Type', 'application/json');
    });

    // Aquí irán: POST /login, POST /logout, GET /validar
};
