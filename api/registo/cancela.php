<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// include database and object file
include_once '../config/database.php';
include_once '../objects/registo.php';
// get core configurations
include_once '../config/core.php'; 
// email service
include_once "../shared/email.php"; 

// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare product object
$registo = new Registo($db);
 
// get product id
$data = json_decode(file_get_contents("php://input"));
 
// set email and code property of record to read 
$registo->email = $_GET["email"]; 
$registo->cod_confirm = $_GET["confirma"]; 

// Ler detalhes do registo a cancelar
$registo->validateOne("A");

if (!empty($registo->nome)) {

    // delete the registo
    if($registo->delete()){

        envia_email(4,$registo->email, $registo->codigo, $registo->cod_confirm);
        
        // set response code - 200 ok
        http_response_code(200);
        // tell the user
        echo json_encode(array("message" => "Registo was deleted."));
        
    }

    // if unable to delete the registo
    else{

        // set response code - 503 service unavailable
        http_response_code(503);

        // tell the user
        echo json_encode(array("message" => "Unable to delete registo."));
    }
} else {
    
    // set response code - 503 service unavailable
    http_response_code(503);

    // tell the user
    echo json_encode(array("message" => "Unable to delete registo."));
    
}
?>