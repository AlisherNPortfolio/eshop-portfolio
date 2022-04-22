<?php

if (!function_exists('is_prod')) {
    function is_prod()
    {
        return app()->environment() !== 'local';
    }
}

if (!function_exists('set_globals')) {
    function set_globals($key, $value)
    {
        if (isset($GLOBALS[$key]) && $GLOBALS[$key] !== $value || empty($GLOBALS[$key])) {
            $GLOBALS[$key] = $value;
        }
    }
}

if (!function_exists('get_globals')) {
    function get_globals($key)
    {
        return !empty($GLOBALS[$key]) ? $GLOBALS[$key] : "";
    }
}

if (!function_exists('get_shop_name')) {
    function get_shop_name()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = htmlspecialchars($url);

        if (str_contains($url, '%20')) {
            throw new InvalidArgumentException("Shop name parameter is invalid! You have used space character", 400);
        }

        if (strlen($url) > 50) {
            throw new InvalidArgumentException("Shop name parameter is invalid! Parameter length have exceeded from 50", 400);
        }

        if (str_contains($url, '/api/site/products/')) {
            $url = explode('/', $url);
            return $url[4];
        }

        return "";
    }
}
