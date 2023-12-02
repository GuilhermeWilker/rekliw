<?php
/*-------------------------------------------------------------/
/    FUNÇÕES DE VALIDAÇÃO -> CAMPOSS(input) ->REQUEST _POST    /
/-------------------------------------------------------------*/

function required($field)
{
    if ($_POST[$field] === '') {
        set_flash_message($field, 'Este campo é obrigatório!');

        return false;
    }

    return filter_input(INPUT_POST, $field, FILTER_SANITIZE_SPECIAL_CHARS);
}

function email($field)
{
    $is_valid_email = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);

    if (!$is_valid_email) {
        set_flash_message($field, 'Formato de e-mail inválido, tente novamente.');

        return false;
    }

    return filter_input(INPUT_POST, $field, FILTER_SANITIZE_SPECIAL_CHARS);
}

function unique($field, $params)
{
    $data = filter_input(INPUT_POST, $field, FILTER_SANITIZE_SPECIAL_CHARS);
    $user = findBy($params, $field, $data);

    if ($user) {
        set_flash_message($field, 'E-mail já cadastrado!');

        return false;
    }

    return $data;
}

function minlen($field, $params)
{
    $data = filter_input(INPUT_POST, $field, FILTER_SANITIZE_SPECIAL_CHARS);

    if (strlen($data) < $params) {
        set_flash_message($field, "Este campo não pode ser menor que {$params} caracteres.");

        return false;
    }

    return $data;
}

function maxlen($field, $params)
{
    $data = filter_input(INPUT_POST, $field, FILTER_SANITIZE_SPECIAL_CHARS);

    if (strlen($data) > $params) {
        set_flash_message($field, "Este campo não pode ser maior que {$params} caracteres.");

        return false;
    }

    return $data;
}
