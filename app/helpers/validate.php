<?php

function validate(array $validations)
{
    $result = [];
    $params = '';
    foreach ($validations as $field => $validate) {
        $result[$field] = (!str_contains($validate, '|'))
            ? single_validation($validate, $field, $params)
            : multiple_validations($validate, $field, $params);
    }

    if (in_array(false, $result)) {
        return false;
    }

    return $result;
}

function single_validation($validate, $field, $params)
{
    if (str_contains($validate, ':')) {
        [$validate, $params] = explode(':', $validate);
    }

    return $validate($field, $params);
}

function multiple_validations($validate, $field, $params)
{
    $exploded_validate_pipe = explode('|', $validate);

    foreach ($exploded_validate_pipe as $validate) {
        if (str_contains($validate, ':')) {
            [$validate, $params] = explode(':', $validate);
        }
        $result = $validate($field, $params);
    }

    return $result;
}
