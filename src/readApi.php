<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require 'apiFile/ApiMethodImpl.php';
$app = new \Slim\App;
$app->get('/des/getAllList', function (Request $request, Response $response) {
    try {
        $getAll = new \ApiMethodImpl();
        $holeList = $getAll->getHoleList();
        $response->getBody()->write($holeList);
        return $response;
    } catch (PDOException $ex) {
        echo 'Cound not take mesage back from the database ' . $ex;
    }
});

$app->get('/des/{parameter}', function (Request $request, Response $response) {
    $parameter = $request->getAttribute('parameter');
    try {
        $getAll = new \ApiMethodImpl();
        $singleParameter = $getAll->getDescriptionByGivenParameter($parameter);
        $response->getBody()->write($singleParameter);
        return $response;
    } catch (PDOException $ex) {
        echo 'Cound not take sinlge value from database ' . $ex;
        echo 'Cound not limited values with limit ' . $parameter . " in " . $ex;
    }
    return $response;
});

$app->get('/des/limit/{limit}', function (Request $request, Response $response) {
    $numberLimit = $request->getAttribute('limit');
    try {
        $getAll = new \apiFiles\ApiMethodImpl();
        $numberOfRequestedParameters = $getAll->getNumberOfPropertiesThatAreRequested($numberLimit);
        $response->getBody()->write($numberOfRequestedParameters);
        return $response;
    } catch (PDOException $ex) {
        echo 'Cound not limited values with limit ' . $numberLimit . " in " . $ex;
    }
    return $response;
});

$app->get('/des/{nameOfGivenType}/{numberOfLimit}', function (Request $request, Response $response) {
    $nameOfGivenType = $request->getAttribute('nameOfGivenType');
    $numberLimit = $request->getAttribute('numberOfLimit');
    try {
        $getAll = new \ApiMethodImpl();
        $numberOfRequestedParameters = $getAll->getDescriptiveListWithLimitations($nameOfGivenType, $numberLimit);
        $response->getBody()->write($numberOfRequestedParameters);
        return $response;
    } catch (PDOException $ex) {
        echo 'Cound not limited values with name '.$nameOfGivenType.' and with limit ' . $numberLimit . " in " . $ex;
    }
    return $response;
});
$app->run();
