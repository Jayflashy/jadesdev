<?php

use App\Models\Section;
use App\Models\Setting;

if (!function_exists('get_setting')) {
    function get_setting($key)
    {
        $settings = Setting::first();
        $setting = $settings->$key;       
        return $setting;
    }
}
function get_section($key)
{
    $sections = Section::first();
    $section = $sections->$key;       
    return $section;
}

if (!function_exists('static_asset')) {
    function static_asset($path, $secure = null)
    {
        return app('url')->asset('public/assets/' . $path, $secure);
    }
}

//return file uploaded via uploader
if (!function_exists('my_asset')) {
    function my_asset($path, $secure = null)
    {
        return app('url')->asset('public/uploads/' . $path, $secure);
    }
}

function text_trim($string, $length = null)
{
    if (empty($length)) $length = 100;
    return Str::limit($string, $length, "...");
}
function show_datetime($date, $format = 'd M, Y h:ia')
{
    return \Carbon\Carbon::parse($date)->format($format);
}