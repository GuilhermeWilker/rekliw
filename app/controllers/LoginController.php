<?php

namespace app\controllers;

class LoginController
{
    public function index()
    {
        return [
            'view' => 'login_template.php',
            'data' => [
                'title' => 'Login',
            ],
        ];
    }

    public function store($request)
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($email or $password)) {
            return redirect_with_error_message('message', 'Email ou senha inválidos', '/login');
        }

        $user = findBy('users', 'email', $email);
        if (!$user) {
            return redirect_with_error_message('message', 'Email ou senha inválidos', '/login');
        }

        if (!password_verify($password, $user->password)) {
            return redirect_with_error_message('message', 'Email ou senha inválidos', '/login');
        }

        $_SESSION[LOGGED] = $user;

        return redirect('/');
    }

    public function destroy()
    {
        unset($_SESSION[LOGGED]);

        return redirect('/');
    }
}
