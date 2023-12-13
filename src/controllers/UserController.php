<?php

namespace app\controllers;

class UserController extends Controller
{
    public function create($request, $response)
    {
        return $this->getView()->render($response, $this->setView('User/create_template'), [
            'title' => 'Cadastro',
        ]);
    }
}
