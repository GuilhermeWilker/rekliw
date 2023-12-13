<?php

namespace app\traits;

use Slim\Views\Twig;

trait Templates
{
    public function getView()
    {
        try {
            return Twig::create(VIEWS);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }

    public function setView($view_name)
    {
        return $view_name.EXT_VIEWS;
    }
}
