<?php

/**
 *  PHP Style Strings
 *  Provides forward compatibilty for using PHP 8 string functions. Comments from original documentation
 */

if (substr(PHP_VERSION, 0, 1) >= 8) {
    // script no longer needed if version is 8 or higher
    return;
}
if (!function_exists("str_contains")) {
    /**
     * Checks if $needle is found in $haystack and returns a boolean value (true/false) whether or not the $needle was found.
     *
     * @param  string $haystack
     * @param  string $needle
     * @return boolean
     */
    function str_contains(string $haystack, string $needle): bool
    {
        return (bool) (strpos($haystack, $needle) !== false);
    }

}

if (!function_exists("str_starts_with")) {

    /**
     * The function returns {@see true} if the passed $haystack starts from the $needle string or {@see false} otherwise.
     *
     * @param  string $haystack
     * @param  string $needle
     * @return boolean
     */
    function str_starts_with(string $haystack, string $needle): bool
    {
        return (bool) (strncmp($haystack, $needle, strlen($needle)) === 0);
    }


}

if (!function_exists('str_ends_with')) {
    /**
     * The function returns {@see true} if the passed $haystack ends with the $needle string or {@see false} otherwise.
     *
     * @param  string $haystack
     * @param  string $needle
     * @return boolean
     */
    function str_ends_with(string $haystack, string $needle): bool
    {
        return (bool) (substr_compare($haystack, $needle, -strlen($needle)) === 0);
    }
}
