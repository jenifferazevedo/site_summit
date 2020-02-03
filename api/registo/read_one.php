<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/registo.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare registo object
$registo = new Registo($db);
 
// set ID property of record to read
$registo->id = isset($_GET['id']) ? $_GET['id'] : die();
 
// read the details of registo to be edited
$registo->readOne();
 


if($registo->nome!=null){
    // create array
    $registo_arr = array(
        "id" =>  $registo->id,
        "email" => $registo->email,
        "nome" => $registo->nome,
        "apelido" => $registo->apelido,
        "status" => $registo->status,
        "codigo" => $registo->codigo

    );
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($registo_arr);
}
 
else{
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user registo does not exist
    echo json_encode(array("message" => "Registo does not exist."));
}
?>