<?php

use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('App\Controller');

/**
 * Insérez vos routes ici
 */
$router->get('/produits', 'ProduitController@index');

$router->run();

