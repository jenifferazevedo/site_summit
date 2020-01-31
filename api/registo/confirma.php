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
// get core configurations
include_once '../config/core.php'; 
// email service
include_once "../shared/email.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare registo object
$registo = new Registo($db);


// set email and code property of record to read 
$registo->email = $_GET["email"]; 
$registo->cod_confirm = $_GET["confirma"]; 


//AQUI VAI TER QUE LIMPAR AS STRINGS 

// Ler detalhes do registo a validar
$registo->validateOne("C");


// Registo Existente e codigo válido
if ($registo->nome != NULL) {  
    
    if ($registo->status == "0") {
    
        // Trata o status do registo
        // Muda o status para 1 (Confirmado!)
        $registo->status = 1;
        // update the registo
        
        if($registo->update()){
            
            envia_email(2,$registo->email, $registo->codigo, $registo->cod_confirm);
            
            // set response code - 200 ok
            http_response_code(200);

            // tell the user
            echo json_encode(array("message" => "Registo foi confirmado!"));
            
        }
        // if unable to update the registo, tell the user
        else
        {
            // set response code - 503 service unavailable
            http_response_code(503);
            // tell the user
            echo json_encode(array("message" => "Unable to Confirmar registo!"));
        }
    } else { // Registo existe, mas o status é diferente de zero (já confirmado)
        
        envia_email(3,$registo->email, $registo->codigo, $registo->cod_confirm);
        
        // set response code - 503 service unavailable
        http_response_code(200);
        // tell the user
        echo json_encode(array("message" => "O Registo já se encontrava confirmado!"));
        
    }
            
} else { // Registo Inexistente ou codigo inválido
    // set response code - 404 service unavailable
    http_response_code(404);
    // tell the user
    echo json_encode(array("message" => "Registo não encontrado!"));
}

?>