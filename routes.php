<?php 
$router->get('/', 'HomeController@index');
$router->get('/listings', 'Listingcontroller@index');
$router->get('/listings/create', 'Listingcontroller@create');
$router->get('/listing/{id}', 'Listingcontroller@show');

