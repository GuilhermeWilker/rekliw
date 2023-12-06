<?php

namespace app\controllers;

class TagController
{
    public function store()
    {
        if (!empty($_POST['tag_name'])) {
            $created = insert_data(
                'tags',
                'tag_name',
                $_POST['tag_name']
            );

            if (!$created) {
                set_flash_message('error_message', 'Error creating tag, please try again.');
                redirect('/');
            }

            set_flash_message('message', 'Tag created successfully');
            redirect('/');
        } else {
            set_flash_message('error_message', 'Tag name not provided.');
            redirect('/');
        }
    }
}
