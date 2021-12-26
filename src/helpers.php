<?php

use PanelSsh\Core\Facades\Nanoid;

if (!function_exists('html_attribute')) {
    /**
     * Make attribute from array
     *
     * @param array $attributes
     *
     * @return string
     * @link https://stackoverflow.com/a/48733854/13701519
     */
    function html_attribute($attributes = [])
    {
        foreach ($attributes as $key => $val) {
            if (is_int($key)) {
                $attributePairs[] = $val;
            } else if (is_array($val) || is_object($val)) {
                $attributePairs[] = sprintf("%s='%s'", $key, addslashes(json_encode($val)));
            } else {
                $val = htmlspecialchars($val, ENT_QUOTES);
                $attributePairs[] = "{$key}=\"{$val}\"";
            }
        }

        return join(' ', $attributePairs ?? []);
    }
}

if (!function_exists('nanoid')) {
    /**
     * Generate NanoID number
     *
     * @return string
     */
    function nanoid()
    {
        return Nanoid::generate();
    }
}
