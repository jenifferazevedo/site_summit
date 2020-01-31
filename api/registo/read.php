<!DOCTYPE txt/html>
<html>
<header>
    <title>Summit 1.0 V.N.Gaia</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</header>
<body>

<!-- 
//     required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
-->  

<?php
     
// database connection will be here

// include database and object files
include_once '../config/database.php';
include_once '../config/core.php';
include_once '../objects/registo.php';


    
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
    

// initialize object
$registo = new Registo($db);

// read registos will be here
// query products
$stmt = $registo->read();
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){

    // products array
    $registo_arr=array();
    $registo_arr["records"]=array();

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);

        $registo_item=array(
            "id" => $id,
            "email" => $email,
            "nome" => $nome,
            "apelido" => $apelido,
            "status" => $status,
            "codigo" => $codigo,
            "cod_confirm" => $cod_confirm, 
            "consentimento" => $consentimento,
            "datareg" => $datareg
        );

        array_push($registo_arr["records"], $registo_item);
    }

    // set response code - 200 OK
    http_response_code(200);

            echo "<table style=\"width=80%\" border=\"none\" align=\"center\">";
            echo "<tr style=border=\"2px solid gray\">";
            echo "<th>" . "id"          . "</th>"; 
            echo "<th>" . "email"       . "</th>";
            echo "<th>" . "nome"        . "</th>";
            echo "<th>" . "apelido"     . "</th>"; 
            echo "<th>" . "status"      . "</th>"; 
            echo "<th>" . "codigo"      . "</th>"; 
            echo "<th>" . "cod_confirma"    . "</th>"; 
            echo "<th>" . "consentimento"   . "</th>";
            echo "<th>" . "Datareg"   . "</th>";
            echo "<th>" . "Confirmar"   . "</th>";
            echo "<th>" . "CheckIn"   . "</th>";
            echo "<th>" . "Anula"   . "</th>";
            echo "</tr>";
    // show products data in json format
    //echo json_encode($registo_arr);
    foreach ($registo_arr as $linha) {
        foreach ($linha as $campo) {

            $p_confirma = "email=" . $campo["email"] . "&" . "confirma=" . $campo["cod_confirm"];
            $p_checkin =  "email=" . $campo["email"] . "&" . "codigo="   . $campo["codigo"];
            $p_cancela =  "email=" . $campo["email"] . "&" . "confirma=" . $campo["cod_confirm"];
            

            $botao_confirma = "<a href=\"". $external_url . "registo/confirma.php?" . $p_confirma . "\" class=button target=\"_self\" >Confirma</a>";
            $botao_checkin  = "<a href=\"". $external_url . "registo/validate.php?" . $p_checkin . "\"  class=button target=\"_self\">CheckIn</a>";
            $botao_cancela  = "<a href=\"". $external_url . "registo/cancela.php?"  . $p_cancela . "\"  class=button target=\"_self\">Cancela Inscrição</a>";
            $botao_refresh = "<a href=\"". $external_url . "registo/read.php?" . "\"  class=button target=\"_self\">Refresh</a>";

            echo "<tr>";
            echo "<td>" . $campo["id"]              . "</td>"; 
            echo "<td>" . $campo["email"]           . "</td>";
            echo "<td>" . $campo["nome"]            . "</td>";
            echo "<td>" . $campo["apelido"]         . "</td>"; 
            echo "<td>" . $campo["status"]          . "</td>"; 
            echo "<td>" . $campo["codigo"]          . "</td>"; 
            echo "<td>" . $campo["cod_confirm"]     . "</td>"; 
            echo "<td>" . $campo["consentimento"]   . "</td>";
            echo "<td>" . $campo["datareg"]         . "</td>";
            echo "<td>" . $botao_confirma  . "</td>";
            echo "<td>" . $botao_checkin. "</td>";
            echo "<td>" . $botao_cancela . "</td>";
            echo "</tr>";
        } 
        echo "<tr>";
        echo "<td cellspan=12>" . $botao_refresh . "</td>";
        echo "</tr>";
    echo "</table>";

    }

}

// no products found will be here
else{

    // set response code - 404 Not found
    http_response_code(404);

    // tell the user no products found
    echo json_encode(
        array("message" => "No registos found.")
    );
}

?>
    
</body>
</html>