<?php

use Slim\Http\Request;
use Slim\Http\Response;
use order;

// Routes

$app->post('/feedback', function (Request $request, Response $response, array $args) {
    $this->logger->info(json_encode($request->getParsedBody()));
    
    // Render index view
    return $response->withStatus(404);
});

$app->post('/order', function (Request $request, Response $response, array $args) {
    $this->logger->info(json_encode($request->getParsedBody()));
    $order = $request->getBody();
    // On parse le JSON pour le convertir en tableau PHP
    $order = json_decode($json, true);
    $total = 0;
    for ($i=0; $i < $order['prices'].length; $i++) { 
        for ($j=0; $j < $order['quantities'].length ; $j++) { 
            $total = $order['prices'] * $order['quantities'];
            
        }
    }

    switch ($order['country']) {
        case 'FR': 
            
            return $ttc = $total+(($total *20)/100);

            break;
        
        default:
            # code...
            break;
    }

    if ($ttc >= 50000 ) {
        $ttc = $ttc - (($ttc * 15)/100);
    }
    if ($ttc >= 10000 ) {
        $ttc = $ttc - (($ttc * 10)/100);
    }
    if ($ttc >= 7000 ) {
        $ttc = $ttc - (($ttc * 7)/100);
    }
    if ($ttc >= 5000 ) {
        $ttc = $ttc - (($ttc * 5)/100);
    }
    if ($ttc >= 1000 ) {
        $ttc = $ttc - (($ttc * 3)/100);
    }
    return $response->withJson( $ttc );
    
});