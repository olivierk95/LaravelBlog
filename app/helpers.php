<?php

if (!function_exists('curentRoute')) {
    function currentRoute(...$routes) {
        foreach($routes as $route){
            if (request()->url() == $route) {
                return ' active';
            }
        }
    }
}