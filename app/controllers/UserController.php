<?php

namespace app\controllers;

class UserController
{
    public function create()
    {
        return [
            'view' => 'User/create_template.php',
            'data' => [
                'title' => 'Create User',
            ],
        ];
    }

    public function store()
    {
        $validate = validate([
            'first_name' => 'required|minlen:3',
            'last_name' => 'required|minlen:3',
            'email' => 'email|unique:freelancers',
            'password' => 'required|minlen:3',
        ]);

        if (!$validate) {
            return redirect('/register');
        }

        $validate['password'] = password_hash($validate['password'], PASSWORD_DEFAULT);

        $created = create_data('freelancers', $validate);
        if (!$created) {
            set_flash_message('message', 'Erro ao criar usuário, tente novamente mais tarde.');

            return redirect('/register');
        }

        return redirect('/');
    }
}
