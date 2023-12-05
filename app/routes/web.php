<?php

return [
    ['GET', '/', 'HomeController@index'],
    ['GET', '/user/create', 'UserController@create'],
    ['GET', '/user/[0-9]+', 'UserController@show'],
    ['GET', '/login', 'LoginController@index'],
    ['GET', '/logout', 'LoginController@destroy'],

    ['POST', '/login', 'LoginController@store'],
    ['POST', '/user/store', 'UserController@store'],
];
