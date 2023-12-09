<?php

namespace app\controllers;

class HomeController
{
    public function index($request)
    {
        $users = findAll('freelancers');
        $projects = findAll('projects');

        if (!is_logged()) {
            redirect('/login');
        }

        return [
            'view' => 'home_template.php',
            'data' => [
                'title' => 'Home',
                'users' => $users,
                'projects' => $projects,
            ],
        ];
    }
}
