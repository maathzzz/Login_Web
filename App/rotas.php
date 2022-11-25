<?php

use App\Controller\LoginController;

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri_parse)

{
    // login index 
    
    case '/login';
    LoginController::index();
    break;
}
