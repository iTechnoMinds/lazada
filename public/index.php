<?php

/**

 * Example:
  * @author Dnyaneshwar Telgad <dnyaneshwarte@cybage.com>
 * @since 2020-08-31
 */
define("ROOT_PATH", realpath(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR));

/* Require vendor autoload  */
require_once ROOT_PATH . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$configuration = [
    "gatewayUrl" => "",
    "appKey" => "",
    "secretKey" => "",
    "authUrl" => "",
    "authCode" => "",
    "accessToken" => "",
    "refreshToken" => "",
];


//$lazopClient = new \lazada\LazopClient($configuration['gatewayUrl'], $configuration['appKey'], $configuration['secretKey']);
//$lazopRequest = new \lazada\LazopRequest('/auth/token/refresh');
//$lazopRequest->addApiParam('refresh_token', $configuration['refreshToken']);
//
//var_dump($lazopClient->execute($lazopRequest));
//exit;

$lazopClient = new \lazada\LazopClient($configuration['gatewayUrl'], $configuration['appKey'], $configuration['secretKey']);
$request = new \lazada\LazopRequest('/orders/get','GET');
$request->addApiParam('created_before','2020-08-28T16:00:00+08:00');
$request->addApiParam('created_after','2017-02-10T09:00:00+08:00');
$request->addApiParam('update_before','2020-08-28T16:00:00+08:00');
$request->addApiParam('sort_direction','DESC');
$request->addApiParam('offset','0');
$request->addApiParam('limit','10');
$request->addApiParam('sort_by','updated_at');
var_dump($lazopClient->execute($request,$configuration['accessToken']));
exit;
