<?php

namespace app\controllers;

class HomeController
{
    public function index($request)
    {
        $users = findAll('freelancer');
        $tags = find_associated_data_by(
            'tags',
            'freelancer_tags',

            'id',
            'tag_id',

            user()->id
        );

        if (!is_logged()) {
            redirect('/login');
        }

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
