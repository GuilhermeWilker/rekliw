<?php

namespace app\controllers;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        $query = $this->getQueryBuilder();

        $freelancers = $query->select('*')
            ->from('freelancers')
            ->fetchAllAssociative();

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
