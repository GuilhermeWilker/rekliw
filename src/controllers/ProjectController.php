<?php

namespace app\controllers;

use app\classes\Flash;
use app\database\models\Project;

class ProjectController extends Controller
{
    public function show($request, $response, $args)
    {
        $id = intval($args['id']);
        $tags = $this->query()->select('*')
            ->from('tags')
            ->fetchAllAssociative();

        $project = $this->query()->select('*')
            ->from('projects')
            ->where('id = :id')
            ->setParameter('id', $id)
            ->fetchAssociative();

        return $this->getView()
            ->render($response, $this->setView('Project/index_template'), [
                'title' => 'Projeto',
                'tags' => $tags,
                'project' => $project,
            ]);
    }

    public function store($request, $response, $args)
    {
        $data = $request->getParsedBody();

        if (!empty($data['title'])) {
            Project::insert('title', $data['title']);

            Flash::setMessage('message', 'Projeto adicionado com sucesso!');

            return redirect($response, '/');
        }

        Flash::setMessage('message', 'Não foi possível criar novo projeto, tente novamente.');

        return redirect($response, '/');
    }
}
