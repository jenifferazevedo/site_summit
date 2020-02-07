<?php

function message($tipo,$message) {
    global $output_msg;
    $output_msg=$message;
    switch ($tipo) {
        case 1:

            echo '<span class="nav-item"><h2>' . $message . '</h2></span>';
            break;
        case 2:
            echo json_encode(array("message" => $message));
            break;
        default:
            // echo " ";    
    }
        
}  

?>

    