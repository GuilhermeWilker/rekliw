<?php

return [
    /*
    'GET' => [
        '/' => 'HomeController@index',
        '/user/create' => 'UserController@create',
        '/user/[0-9]+' => 'UserController@show',
        '/login' => 'LoginController@index',
        '/logout' => 'LoginController@destroy',
    ],
    'POST' => [
        '/login' => 'LoginController@store',
        '/user/store' => 'UserController@store',
    ],
*/
    ['GET', '/', 'HomeController@index'],
    ['GET', '/user/create', 'UserController@create'],
    ['GET', '/user/[0-9]+', 'UserController@show'],
    ['GET', '/login', 'LoginController@index'],
    ['GET', '/logout', 'LoginController@destroy'],

    ['POST', '/login', 'LoginController@store'],
    ['POST', '/user/store', 'UserController@store'],
];
