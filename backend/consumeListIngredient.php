<?php
require_once('./lib/nusoap.php');
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

// require('cors.php');
// cors();

error_reporting(E_ALL);
ini_set('display_errors', 1);

$client = new nusoap_client("http://localhost/Tasty-Twist/backend/listIngredient.php?wsdl");

$error = $client->getError();

if ($error) {
    echo $error;
}

$data = $client->call("fetchIngredients");

echo $data;
?>