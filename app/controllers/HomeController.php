<?php

namespace app\controllers;

class HomeController
{
    public function index($request)
    {
        $users = findAll('users');

        delete_data(
            'users',
            ['id' => 25]);

        return [
            'view' => 'home_template.php',
            'data' => [
                'title' => 'Home',
                'users' => $users,
            ],
        ];
    }
}
