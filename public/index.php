<?php


use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use Controller\PlayerController;

require_once "../vendor/autoload.php";


$config['displayErrorDetails']=true;


$app = new \Slim\App(['settings'=>$config]);

$app->get("/hello/{name}", function (Request $request, Response $response, array $args){
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get("/api/player/{mode}", function ( Request $request, Response $response, array $args){
   $mode = $args["mode"];
    $test =  new PlayerController();
    return $test->indexAction($mode, $response, $request);
});

$app->get("/test", function (Request $request, Response $response, array $args){
    var_dump($request->getQueryParams());
    echo $request->getQueryParams()["val"];
    return $response;
});

$app->run();