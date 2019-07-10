<?php


if (!function_exists('camelToKebab')) {
    function camelToKebab(string $string): string
    {
        return strtolower(preg_replace('/([a-z0-9])([A-Z])/', '$1-$2', $string));
    }
}
if (!function_exists('slashToDot')) {
    function slashToDot(string $string): string
    {
        return preg_replace('/\\\/', '.', $string);
    }
}
if (!function_exists('pluralize')) {
    function pluralize(string $string)
    {
        return ((preg_replace(["/[y]$/", "/[s]$/"], ["ie", "e"], $string)) . "s");
    }
}
if (!function_exists('formatBytes')) {
    function formatBytes(int $bytes, int $precision = 2): string
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1000));
        $pow = min($pow, count($units) - 1);
        return round(($bytes / pow(1000, $pow)), $precision) . ' ' . $units[$pow];
    }
}
if (!function_exists('floatValue')) {
    function floatValue($val): float
    {
        $val = str_replace(",", ".", $val);
        $val = preg_replace('/\.(?=.*\.)/', '', $val);
        return floatval($val);
    }
}
