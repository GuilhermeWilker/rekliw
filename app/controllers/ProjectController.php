<?php

namespace app\controllers;

class ProjectController
{
    public function store()
    {
        if (!empty($_POST['title'])) {
            redirect_with_error_message(
                'message_error',
                'Erro ao adicionar novo projeto, tente novamente',
                '/'
            );
        }

        insert_data('projetos', 'title', $_POST['title']);

        return redirect('/');
    }
}
