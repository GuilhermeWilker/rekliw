<?php

namespace app\controllers;

use app\traits\DoctrineTrait;
use app\traits\Templates;

abstract class Controller
{
    use Templates;
    use DoctrineTrait;

    protected function query()
    {
        return $this->getQueryBuilder();
    }
}
