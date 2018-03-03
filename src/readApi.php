<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/getAllList', function (Request $request, Response $response, array $args) {
    try {
        $getAll = new \ApiMethodImpl();
        $holeList = $getAll->getHoleList();
        $response->getBody()->write($holeList);
        return $response;
    } catch (PDOException $ex) {
        echo 'Cound not take mesage back from the database ' . $ex;
    }
});
$app->run();


//$app = new \Slim\App;
//$app->get('/des/{name}', function (Request $request, Response $response, array $args) {
//    $name = $args['name'];
//    $response->getBody()->write("Hello, $name");
//
//    return $response;
//});
//$app->run();
