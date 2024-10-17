<?php

if (!function_exists('getVisitorLocation')) {
    function getVisitorLocation($ip = null){
        if (config('app.env') == 'production') {
            $location = \Stevebauman\Location\Facades\Location::get($ip);
        } else {
            $location = \Stevebauman\Location\Facades\Location::get();
        }

        return $location;
    }
}
