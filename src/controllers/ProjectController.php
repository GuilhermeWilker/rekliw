<?php

namespace app\controllers;

class ProjectController extends Controller
{
    public function show($request, $response, $args)
    {
        $query = $this->getQueryBuilder();

        $tags = $query->select('*')
            ->from('tags')
            ->fetchAllAssociative();

        return $this->getView()
            ->render($response, $this->setView('Project/index_template'), [
                'title' => 'Projeto',
                'tags' => $tags,
            ]);
    }
}
