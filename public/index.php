<?php

use Sectheater\Http\Request;
use Sectheater\Http\Response;
use Sectheater\Http\Route;


use Sectheater\Http ;


require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../routes/web.php';


$route = new Route(new Request,new Response);


dump($route->requset->path());