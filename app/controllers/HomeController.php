<?php

namespace app\controllers;

class HomeController
{
    public function index($request)
    {
        $users = findAll('freelancer');
        $tags = findAll('tags');

        return [
            'view' => 'home_template.php',
            'data' => [
                'title' => 'Home',
                'users' => $users,
                'tags' => $tags,
            ],
        ];
    }
}
