<?php
if (!function_exists('slashToDot')) {
    function slashToDot(string $string): string
    {
        return preg_replace('/\\\/', '.', $string);
    }
}
