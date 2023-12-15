<?php

namespace app\controllers;

use app\classes\Flash;
use app\classes\Validations;
use app\database\models\Freelancer;

class UserController extends Controller
{
    public function __construct(private $validations)
    {
        $this->validations = new Validations();
    }

    public function create($request, $response)
    {
        $messages = Flash::getAll();

        return $this->getView()->render($response, $this->setView('User/create_template'), [
            'title' => 'Cadastro',
            'messages' => $messages,
        ]);
    }

    public function store($request, $response, $args)
    {
        $formData = $request->getParsedBody();

        $this->validations->required([
               'first_name',
               'last_name',
               'email',
               'password',
           ])
           ->email('freelancers', 'email', $_POST['email']);

        $errors = $this->validations->getErrors();

        if ($errors) {
            Flash::flashes($errors);

            return redirect($response, '/register');
        }

        try {
            Freelancer::create($formData);

            return redirect($response, '/');
        } catch (\Exception $e) {
            Flash::flashes(['message' => 'Ocorreu um erro ao criar o registro.']);

            return redirect($response, '/register');
        }
    }
}
