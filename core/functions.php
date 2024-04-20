<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function base_path($path){
    return BASE_PATH . $path;
}

function view($path, $params = []){
 
    extract($params);

    return require base_path('views/') . $path;

}

function loadPartial($partial,$params = []){
    extract ($params);
   return require base_path('views/partials/') . $partial;
}