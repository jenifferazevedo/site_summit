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
$POSTmsg_arr = explode(" ", file_get_contents('php://input'));

// echo "|" . $POSTmsg_arr[0] . "|" . $POSTmsg_arr[1] . "|";

if ($POSTmsg_arr[0] == "joao.ledo.fonseca@gmail.com" && $POSTmsg_arr[1] == "1111") {
    echo "2";
}
else
{
    echo "0";
}

/*

// set email and code property of record to read 
$registo->email = $POSTmsg_arr[0]; //($POSTmsg_arr[0] != null) ? $POSTmsg_arr[0] : die();
$registo->code = $POSTmsg_arr[1]; //($POSTmsg_arr[1] != null) ? $POSTmsg_arr[1] : die();

// read the details of registo to be edited
$registo->validateOne();

echo $registo->id ." ". $registo->email ." ". $registo->nome . "  " . $registo->codigo;


if ($registo->nome!= null) {
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
 
    echo "1";
}
else
{
    // set response code - 404 Not found
    http_response_code(404);
    
    echo "0";
}
*/

/*

$registo->email = $postmessage_arr[0];
    
// read the details of registo to be edited
$registo->validateOne();
 


if($registo->nome!=null){
    // create array
    $registo_arr = array(
        "id" =>  $registo->id,
        "email" => $registo->email,
        "nome" => $registo->nome,
        "apelido" => $registo->apelido,
        "status" => $registo->status,
        "codigo" => $registo->status
    );
 
    // set response code - 200 OK
    http_response_code(200);
 
    // In string format *JCF
    echo $registo_arr[status];
    // make it json format
    // echo json_encode($registo_arr); 
}
 
else{
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user registo does not exist
    echo json_encode(array("message" => "Registo does not exist."));
}
*/


?>