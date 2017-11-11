<?php

if (!function_exists('activePage')) {
    function activePage($url = '', $class = 'is-active') {
        return Request::is($url . '*') ? $class : '';
    }
}
