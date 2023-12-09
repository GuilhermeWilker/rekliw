<?php

namespace app\controllers;

class ProjectController
{
    public function show($project_id)
    {
        $project_id =
            intval($project_id['project']);

        $project = findBy(
            'projects',
            'id',
            $project_id
        );

        $tags = find_associated_data_by(
            'tags', 'project_tags',
            'id', 'tag_id',
            'project_id',
            $project_id
        );

        return [
            'view' => 'Project/index_template.php',
            'data' => [
                'title' => 'Projeto',
                'project' => $project,
                'tags' => $tags,
            ],
        ];
    }

    public function store()
    {
        if (!empty($_POST['title'])) {
            redirect_with_error_message(
                'message_error',
                'Erro ao adicionar novo projeto, tente novamente',
                '/'
            );
        }

        insert_data('projects', 'title', $_POST['title']);

        return redirect('/');
    }
}
