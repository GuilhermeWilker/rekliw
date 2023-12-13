<?php

namespace app\controllers;

class LoginController extends Controller
{
    public function index($request, $response)
    {
        return $this->getView()->render($response, $this->setView('login_template'), [
            'title' => 'Cadastro',
        ]);
    }

    public function store($request, $response)
    {
    }

    public function destroy()
    {
    }
}
