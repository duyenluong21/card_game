<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json ; charset=UTF-8");
header("Access-Control-Allow-Methods: GET") ; 

include 'function.php';

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "GET"){
        $matchesAI = getCountMatchesAI($_GET);
        echo $matchesAI;
}else{
    $data = [
        'status' => 404,
        'messange' => $requestMethod. 'Method not allowed',
    ];
    header("HTTP/1.0 404 Method not allowed");
    echo json_encode($data);
}
?>
