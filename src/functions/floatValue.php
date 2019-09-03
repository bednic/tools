<?php
if (!function_exists('floatValue')) {
    function floatValue($val): float
    {
        $val = str_replace([",", " "], ".", $val);
        $val = preg_replace('/\.(?=.*\.)/', '', $val);
        return floatval($val);
    }
}
