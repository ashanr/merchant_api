<?php


if (!function_exists('ddcors')) {
    /**
     * enable cors on dd().
     *
     * @return mixed
     */
    function ddcors($args)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: *');
        header('Access-Control-Allow-Headers: *');
        dd($args);
        die();
    }
}
