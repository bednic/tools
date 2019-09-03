<?php
if (!function_exists('pluralize')) {
    function pluralize(string $string)
    {
        return ((preg_replace(["/[y]$/", "/[s]$/"], ["ie", "e"], $string)) . "s");
    }
}
