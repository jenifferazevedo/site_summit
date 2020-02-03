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
 
// Get received data for the record to validate

$postparam = file_get_contents('php://input');

if (!empty($postparam)) { 
    $POSTmsg_arr = explode(" ", $postparam);
    
    // set email and code property of record to read 
    $registo->email = $POSTmsg_arr[0]; 
    //($POSTmsg_arr[0] != null) ? $POSTmsg_arr[0] : die();
    $registo->codigo = $POSTmsg_arr[1]; 
    //($POSTmsg_arr[1] != null) ? $POSTmsg_arr[1] : die();

} else {
    $registo->email = $_GET["email"];
    $registo->codigo = $_GET["codigo"];
}



//AQUI VAI TER QUE LIMPAR AS STRINGS 

// Ler detalhes do registo a validar
$registo->validateOne("V");


// Registo Existente e codigo válido
if ($registo->nome != NULL && $registo->status != 0 ) {  
    
    // set response code - 200 OK
    http_response_code(200); 
    
    // Trata o status do registo
    
    // Está registado sem loggin!
    if ($registo->status == "1") {  

        echo "1";          
        
        // Muda o status para 2 (logged)
        $registo->status = "2";
        // update the registo
        if($registo->update()){
            // set response code - 200 ok
            // http_response_code(200);

            // tell the user
            // echo json_encode(array("message" => "Registo was updated."));
        }
        // if unable to update the registo, tell the user
        else{
            // set response code - 503 service unavailable
            // http_response_code(503);
            // tell the user
            // echo json_encode(array("message" => "Unable to update registo."));
        }
        
    // Está registado e já fez loggin    
    } else {
        echo "2";  
    }  
    
}
// Registo Inexistente ou codigo inválido
else
{
    // set response code - 404 Not found
    // http_response_code(404);
    
    echo "0";  //Não está registado ou código inválido
}

?>