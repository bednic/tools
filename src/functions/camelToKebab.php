<?php
if (!function_exists('camelToKebab')) {
    function camelToKebab(string $string): string
    {
        return strtolower(preg_replace('/([a-z0-9])([A-Z])/', '$1-$2', $string));
    }
}
