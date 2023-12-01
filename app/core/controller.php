<?php

function getController($matchedUri, $request)
{
    [$controller, $method] = explode('@', array_values($matchedUri)[0]);

    $controllerClass = CONTROLLER_PATH.$controller;

    if (!class_exists($controllerClass)) {
        throw new Exception("Controller class {$controller} dont exist");
    }

    $controllerInstance = new $controllerClass();

    if (!method_exists($controllerInstance, $method)) {
        throw new Exception("The method {$method} dont exist on controller {$controller}");
    }

    return $controllerInstance->$method($request);
}
