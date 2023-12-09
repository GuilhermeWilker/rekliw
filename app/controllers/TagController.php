<?php

namespace app\controllers;

class TagController
{
    public function store($project_id)
    {
        $project_id =
            intval($project_id['tag']);

        if (empty($_POST['tag_name'])) {
            set_flash_message(
                'error_message',
                'Tag name not provided.'
            );

            return redirect('/project/$project_id');
        }

        $created = insert_data('tags', 'tag_name', $_POST['tag_name']);

        if (!$created) {
            set_flash_message(
                'error_message',
                'Error creating tag, please try again.'
            );

            return redirect('/project/$project_id');
        }

        $tag = find_last_inserted('id', 'tags');

        associate_data('project_tags', [
                'project_id' => $project_id,
                'tag_id' => $tag,
            ]);

        set_flash_message(
            'message',
            'Tag created successfully'
        );

        return redirect("/project/$project_id");
    }
}
