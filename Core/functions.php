<?php

use Core\Response;

function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function abort($code = 404) {
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

function isUrl($value){
    return $_SERVER["REQUEST_URI"] === $value;
}

function authorized($condition, $status = Response::FORBIDDEN){
    if (!$condition){
        abort($status);
    }
}

function base_path($path) {
    return dirname(__DIR__) . '/' . $path;
}

function view($path, $attributes = []) {
    extract($attributes);

    require base_path("views/{$path}");

}

function redirect($path){
    header("location: {$path}");
    exit();
}

function old($key, $default = '') {
    return Core\Session::get('old')[$key] ?? $default;
}