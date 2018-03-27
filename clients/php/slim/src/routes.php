<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->post('/feedback', function (Request $request, Response $response, array $args) {
    $this->logger->info(json_encode($request->getParsedBody()));
    
    // Render index view
    return $response->withStatus(404);
});

$app->post('/order', function (Request $request, Response $response, array $args) {
    $this->logger->info(json_encode($request->getParsedBody()));

    //code goes here
});