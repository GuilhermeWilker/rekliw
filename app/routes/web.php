<?php

return [
    ['GET', '/', 'HomeController@index'],
    ['GET', '/register', 'UserController@create'],
    ['GET', '/user/[0-9]+', 'UserController@show'],
    ['GET', '/login', 'LoginController@index'],
    ['GET', '/logout', 'LoginController@destroy'],
    ['GET', '/project/[0-9]+', 'ProjectController@show'],

    ['POST', '/login', 'LoginController@store'],
    ['POST', '/user/store', 'UserController@store'],
    ['POST', '/tag/[0-9]+', 'TagController@store'],
    ['POST', '/project', 'ProjectController@store'],
];
