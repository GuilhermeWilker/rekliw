<?php

namespace app\controllers;

class UserController
{
    public function show($request)
    {
        if (!isset($request['user'])) {
            return redirect('/');
        }

        $user = findBy('users', 'id', $request['user'], 'email, name');
        dd($user);
    }

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
            'name' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required|minlen:3',
        ]);

        if (!$validate) {
            return redirect('/user/create');
        }

        dd($validate);
    }
}
