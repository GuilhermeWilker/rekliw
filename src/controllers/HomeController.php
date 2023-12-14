<?php

namespace app\controllers;

use app\database\models\Freelancer;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        $query = $this->getQueryBuilder();

        $freelancers = Freelancer::all();

        $projects = $query->select('*')
            ->from('projects')
            ->fetchAllAssociative();

        return $this->getView()->render($response, $this->setView('index'), [
            'title' => 'Home',
            'freelancers' => $freelancers,
            'projects' => $projects,
        ]);
    }
}
