<?php

use Illuminate\Support\Facades\Log;

if (!function_exists('debug')) {
    /**
     * Log data into laravel.log
     *
     * @param mixed $data
     * @return void
     */
    function debug($data, $exit = false) : void
    {
        Log::info(print_r($data, true));

        if ($exit) {
            exit;
        }
    }
}
