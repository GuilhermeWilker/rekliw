<?php

return [
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
];
