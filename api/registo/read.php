<!DOCTYPE txt/html>
<html>
<header>
    <title>Summit 1.0 V.N.Gaia</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./read_style.css">
</header>
<body>


<?php

// include database and object files
include_once '../config/database.php';
include_once '../config/core.php';
include_once '../objects/registo.php';

    
// instantiate database and registo object
$database = new Database();
$db = $database->getConnection();
    

// initialize object
$registo = new Registo($db);

// read registos will be here
// query registos
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

        // Lê as categorias para a linha        
        
        $registo_cat = array();
        $stmt_cat = $registo->read_categorias($id);
        $num = $stmt_cat->rowCount();
        
            
        if ($num>0) {   
            while ($row = $stmt_cat->fetch(PDO::FETCH_ASSOC)){
                // extract row
                // this will make $row['name'] to
                // just $name only
                extract($row);
                array_push($registo_cat,$name);
                
            }
        
        }

        $registo_item=array(
            "id" => $id,
            "email" => $email,
            "nome" => $nome,
            "apelido" => $apelido,
            "status" => $status,
            "codigo" => $codigo,
            "cod_confirm" => $cod_confirm, 
            "consentimento" => $consentimento,
            "datareg" => $datareg,
            "categorias" => $registo_cat
        );
        
        
        array_push($registo_arr["records"], $registo_item);
    }

    // set response code - 200 OK
    http_response_code(200);

    echo "<table align=center>";
    echo "<tr>";
    echo "<th>" . "Id"              . "</th>"; 
    echo "<th>" . "Nome"            . "</th>";
    echo "<th>" . "Apelido"         . "</th>"; 
    echo "<th>" . "email"           . "</th>";
    echo "<th>" . "Status"          . "</th>"; 
    echo "<th>" . "Codigo"          . "</th>"; 
    echo "<th>" . "Cod.Confirmação" . "</th>"; 
    echo "<th>" . "Consent."        . "</th>";
    echo "<th>" . "Datareg"         . "</th>";
    echo "<th>" . "Confirmar"       . "</th>";
    echo "<th>" . "Anulação"        . "</th>";
    echo "<th>" . "CheckIn"         . "</th>";

    echo "</tr>";
    // show products data in json format
    //echo json_encode($registo_arr);
    
    foreach ($registo_arr as $linha) {
        foreach ($linha as $campo) {
            
            $p_confirma = "email=" . $campo["email"] . "&" . "confirma=" . $campo["cod_confirm"];
            $p_checkin =  "email=" . $campo["email"] . "&" . "codigo="   . $campo["codigo"];
            $p_cancela =  "email=" . $campo["email"] . "&" . "confirma=" . $campo["cod_confirm"];
            
            if ($campo["status"]==0)    
                $botao_confirma = "<a href='". $external_url . "registo/confirma.php?" . $p_confirma . "'  class=button target='_self' >Confirma</a>";
            else
                 $botao_confirma = "Confirmado";
            
            if ($campo["status"]>0)    
                $botao_checkin  = "<a href='". $external_url . "registo/validate.php?" . $p_checkin . "'  class=button target=\"_self\">CheckIn</a>";
            else
                $botao_checkin  = "Não Confirmado";
            
            if ($campo["status"]<2)
                $botao_cancela  = "<a href='". $external_url . "registo/cancela.php?"  . $p_cancela . "'  class=button target='_self'>Cancela Inscrição</a>";
            else
                $botao_cancela  = " ";                
            
            $botao_refresh = "<a href='". $external_url . "registo/read.php' class=button target='_self'>Refresh</a>";

            echo "<tr>";
            echo "<td>"     . $campo["id"]              . "</td>"; 
            echo "<td><b>"  . $campo["nome"]         . "</b></td>";
            echo "<td><b>"  . $campo["apelido"]      . "</b></td>"; 
            echo "<td>"     . $campo["email"]           . "</td>";
            echo "<td>"     . $campo["status"]          . "</td>"; 
            echo "<td>"     . $campo["codigo"]          . "</td>"; 
            echo "<td>"     . $campo["cod_confirm"]     . "</td>"; 
            echo "<td>"     . $campo["consentimento"]   . "</td>";
            echo "<td>"     . $campo["datareg"]         . "</td>";
            echo "<td>"     . $botao_confirma  . "</td>";
            echo "<td>"     . $botao_cancela . "</td>";
            echo "<td>"     . $botao_checkin. "</td>";

            echo "</tr>";
            
            
            (empty($campo["categorias"]) ? $cat = "Sem seleção" : $cat = ""  );
            foreach ($campo["categorias"] as $nome_cat) {
                    $cat .= $nome_cat . ",";
            }
            echo "<tr><td colspan=9 align=right><span class='cat'>" . $cat . "</span></td><td colspan=3></td></tr>";
            
        } 
        echo "<tr>";
        echo "<td cellspan=12>" . $botao_refresh . "</td>";
        echo "</tr>";
        echo "</table>";

    }

}

// no records found will be here
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