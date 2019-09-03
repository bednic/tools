<?php
if (!function_exists('camelToSnake')) {
    function camelToSnake(string $string): string
    {
        return strtolower(preg_replace('/([a-z0-9])([A-Z])/', '$1_$2', $string));
    }
}
