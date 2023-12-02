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
}
