<?php

function uriExataEncontrada($uri,$routes){

    return (array_key_exists($uri,$routes)) ? [$uri=>$routes[$uri]] : [];

}

function uriDinamicaEncontrada($uri,$routes){
    return  array_filter(
            $routes,
            function($value) use($uri){
                $regex=str_replace('/','\/',ltrim($value,'/'));
                return preg_match("/^$regex$/",ltrim($uri,'/'));
            },ARRAY_FILTER_USE_KEY
            );
}

function params($uri,$matchedUri){
    if (!empty($matchedUri)) {
        $getParams=array_keys($matchedUri)[0];
            
        return array_diff( 
            $uri,
            explode('/',ltrim($getParams,'/'))
        );
    }
    return [];
}

function paramsFormat($uri,$params){
        $paramsData=[];
        foreach($params as $index=>$param){
            $paramsData[$uri[$index-1]]=$param;
        }
        return $paramsData;
}


function router()
{
    $uri=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $routes=require 'routes.php';
    $requestMethod=$_SERVER['REQUEST_METHOD'];

    $params=[];

    $matchedUri=uriExataEncontrada($uri,$routes[$requestMethod]);
    if (empty($matchedUri)) {
        $matchedUri=uriDinamicaEncontrada($uri,$routes[$requestMethod]);
        $uri=explode('/',ltrim($uri,'/'));
        $params=params($uri, $matchedUri);
        
        $params=paramsFormat($uri,$params);
    }
    
    if (!empty($matchedUri)) {
        return controller($matchedUri,$params);
    }
    
    redirect('/maintenance');
}