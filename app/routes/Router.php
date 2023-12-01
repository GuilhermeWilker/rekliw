<?php

function routes()
{
    return require 'web.php';
}

function exact_uri_path_matches_array_routes($uriPath, $routes)
{
    if (array_key_exists($uriPath, $routes)) {
        return [$uriPath => $routes[$uriPath]];
    }

    return [];
}

function regex_expression_match_array_routes($uriPath, $routes)
{
    return array_filter($routes, function ($value) use ($uriPath) {
        $regex = str_replace('/', '\/', format_path_uri($value));

        return preg_match("/^$regex$/", format_path_uri($uriPath));
    }, ARRAY_FILTER_USE_KEY);
}

function get_params_from_uriPath($uriPath, $matchedUri)
{
    if (!empty($matchedUri)) {
        $matched_to_get_params = array_keys($matchedUri)[0];

        return array_diff(
            explode('/', format_path_uri($uriPath)),
            explode('/', format_path_uri($matched_to_get_params))
        );
    }

    return [];
}

function format_params($uriPath, $request)
{
    $uriPath = explode('/', format_path_uri($uriPath));

    $request_data = [];
    foreach ($request as $index => $param) {
        $request_data[$uriPath[$index - 1]] = $param;
    }

    return $request_data;
}

function format_path_uri($path)
{
    return ltrim($path, '/');
}

function router()
{
    $uriPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $routes = routes();

    $request_method = $_SERVER['REQUEST_METHOD'];

    $matchedUri = exact_uri_path_matches_array_routes($uriPath, $routes[$request_method]);

    $request = [];

    if (empty($matchedUri)) {
        $matchedUri = regex_expression_match_array_routes($uriPath, $routes[$request_method]);

        $request = get_params_from_uriPath($uriPath, $matchedUri);
        $request = format_params($uriPath, $request);
    }

    if (!empty($matchedUri)) {
        return getController($matchedUri, $request);
    }

    throw new Exception('Algo deu errado');
}
