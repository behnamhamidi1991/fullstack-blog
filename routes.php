<?php
$router->get('/', 'HomeController@index');
$router->get('/listings', 'Listingcontroller@index');
$router->get('/listings/create', 'Listingcontroller@create');
$router->get('/listings/edit/{id}', 'ListingController@edit');
$router->get('/listings/{id}', 'Listingcontroller@show');

$router->post('/listings', 'Listingcontroller@store');
$router->put('/listings/{id}', 'ListingController@update');
$router->delete('/listings/{id}', 'ListingController@destroy');
