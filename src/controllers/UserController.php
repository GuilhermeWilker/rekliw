<?php

namespace app\controllers;

use app\classes\Flash;

class UserController extends Controller
{
    public function create($request, $response)
    {
        /*return $this->getView()->render($response, $this->setView('User/create_template'), [
            'title' => 'Cadastro',
        ]);
        */

        Flash::setMessage('message', 'Testando, retorne a pagina inicial...');

        return redirect($response, '/');
    }
}
