<?php

namespace app\classes;

class Routes
{
    public static function load($routes, $uri)
    {
        if(!array_key_exists($uri, $routes)) {

            // throw new \Exception("Rota não existe {$uri}");
            
            header('location: /pages/page_not_found');

        }
        
        return "../app/{$routes[$uri]}.php"; 
    }
}