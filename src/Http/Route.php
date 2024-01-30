<?php 

namespace Sectheater\Http ;

 

class Route {

public Request $requset;
protected Response $response;

    public function __construct(Request $requset,Response $response){
        $this->requset = $requset;
        $this->response = $response;

    }
    public static array $routes = [];
    public static function get( $route, $action){
        self::$routes[$route] = $action;

    }
    public static function post( $route, $action){  
        self::$routes[$route] = $action;
    }
}