<?php

function is_arr_associative(array $arr)
{
    return array_keys($arr) !== range(0, count($arr) - 1);
}
