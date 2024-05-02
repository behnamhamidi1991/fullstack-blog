<?php
$router->get('/', 'HomeController@index');
$router->get('/listings', 'Listingcontroller@index');
$router->get('/listings/create', 'Listingcontroller@create', ['auth']);
$router->get('/listings/edit/{id}', 'ListingController@edit', ['auth']);
$router->get('/listings/{id}', 'Listingcontroller@show');

$router->post('/listings', 'Listingcontroller@store', ['auth']);
$router->put('/listings/{id}', 'ListingController@update', ['auth']);
$router->delete('/listings/{id}', 'ListingController@destroy', ['auth']);

$router->get('/auth/register', 'UserController@create', ['guest']);
$router->get('/auth/login', 'UserController@login', ['guest']);

$router->post('/auth/register', 'UserController@store', ['guest']);
$router->post('/auth/logout', 'UserController@logout', ['auth']);
$router->post('/auth/login', 'UserController@authenticate', ['guest']);
