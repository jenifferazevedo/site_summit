<?php
// required headers
/*
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
*/

// get core configurations
include_once '../config/core.php';
// get database connection
include_once '../config/database.php';
// instantiate registo object
include_once '../objects/registo.php';
// email service
include_once "../shared/email.php";
// user message service
include_once "../shared/msg.php";

$database = new Database();
$db = $database->getConnection();
 
$registo = new Registo($db);
 
$raw_data = file_get_contents("php://input");

//get posted data
/*
if ($test) {
    //$data = json_decode($raw_data);
    echo $raw_data;
}
*/

// make sure data is not empty
if(
    !empty($_POST["email"]) &&
    !empty($_POST["nome"]) &&
    !empty($_POST["apelido"]) &&
    !empty($_POST["telefone"]) 
    //!empty($_POST["consentimento"])
    )  {
    
    // set product property values
    $registo->email = $_POST["email"];
    $registo->nome = $_POST["nome"];
    $registo->apelido = $_POST["apelido"];
    $registo->telefone = $_POST["telefone"];
    // $registo->status = $_POST["status"];
    $registo->codigo = mt_rand(1000,9999);
    $registo->cod_confirm = mt_rand(10000,99999);
    $registo->consentimento = $_POST["consentimento"];
    
    
    if (!empty($_POST["categoria"])) { 
        $categorias = $_POST["categoria"];
        foreach ( $categorias as $cat_id) {
            array_push($registo->categoria, $cat_id);
        }  
    }
    
    // create the registo
    if($registo->create()){

        envia_email(1,$registo->email, $registo->codigo, $registo->cod_confirm);
            
     
        // set response code - 201 created
        // http_response_code(201);
 
        // tell the user
        message("1","Registo foi criado.");
    }
 
    // if unable to create the registo, tell the user
    else{
 
        // set response code - 503 service unavailable
        // http_response_code(503);
 
        // tell the user
        message("1","Impossivel criar registo.");
        
    }
}
 
// tell the user data is incomplete
else{
 
    // set response code - 400 bad request
    // http_response_code(400);
 
    // tell the user
    message("1","Impossivel criar registo. Dados incompletos.");
}

/*
function message($tipo,$message) {
    // global $output_msg;
    // $output_msg=$message;
    
    switch ($tipo) {
        case 1:            
            echo "<span class=>".$message."</span>";
            break;
        case 2:
            echo json_encode(array("message" => $message));
            break;
        default:
            ;    
    }
        
}  
*/
?>