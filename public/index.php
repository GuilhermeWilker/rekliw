<?php

require 'bootstrap.php';

try {
    $data = router();

    extract($data['data']);

    if (!isset($data['data'])) {
        throw new Exception('The index data was not found!');
    }

    if (!isset($data['data']['title'])) {
        throw new Exception('The index title was not found!');
    }

    if (!isset($data['view'])) {
        throw new Exception('The index template was not found!');
    }

    if (!file_exists(VIEWS.$data['view'])) {
        throw new Exception("The template {$data['view']} was not found!");
    }

    $view = $data['view'];

    require VIEWS.'master_template.php';
} catch (Exception $e) {
    dd($e->getMessage());
}
