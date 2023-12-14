<?php

namespace app\controllers;

use app\classes\Flash;

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

        $message = Flash::getMessage('message');

        return $this->getView()->render($response, $this->setView('index'), [
            'title' => 'Home',
            'freelancers' => $freelancers,
            'projects' => $projects,
            'message' => $message,
        ]);
    }
}
