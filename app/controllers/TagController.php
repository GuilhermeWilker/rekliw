<?php

namespace app\controllers;

class TagController
{
    public function store()
    {
        if (!empty($_POST['tag_name'])) {
            set_flash_message(
                'error_message',
                'Tag name not provided.'
            );

            return redirect('/');
        }

        $created = insert_data(
            'tags',
            'tag_name',
            $_POST['tag_name']
        );

        if (!$created) {
            set_flash_message(
                'error_message',
                'Error creating tag, please try again.'
            );

            return redirect('/');
        }

        $tag = find_last_inserted('id', 'tags');

        associate_data('freelancer_tags', [
                'freelancer_id' => user()->id,
                'tag_id' => $tag->id,
            ]);

        set_flash_message(
            'message',
            'Tag created successfully'
        );

        return redirect('/');
    }
}
