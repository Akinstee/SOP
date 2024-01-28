<?php

if (!function_exists('is_active_link')) {
    function is_active_link($pattern)
    {
        return request()->is($pattern) ? 'active' : '';
    }
}