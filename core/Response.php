<?php
namespace core;
class Response
{
    const NOT_FOUND = 404;
    
    const FORBIDEN = 403;

    public  static function abort($code = 404)
    {
        http_response_code($code);
        require base_path("views/{$code}.php");
        die();
    }
}
