<?php

namespace app\controllers;

class ProjectController extends Controller
{
    public function show($request, $response, $args)
    {
        $tags = $this->query()->select('*')
            ->from('tags')
            ->fetchAllAssociative();

        return $this->getView()
            ->render($response, $this->setView('Project/index_template'), [
                'title' => 'Projeto',
                'tags' => $tags,
            ]);
    }

    public function store($request, $response, $args)
    {
        dd($_POST['title']);
    }
}
