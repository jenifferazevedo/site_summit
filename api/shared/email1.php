<?php       

function envia_email($tipo, $email, $codigo, $cod_confirm)
    {
       // Envio do email
        
        global $test;
        global $external_url;
        
        // boundary 
        $semi_rand = md5(time()); 
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
        
        //headers
        $headers = "From: Summit 1.0 - V.N.Gaia \r\n";
        $headers = "MIME-Version: 1.0 \r\n"; 
        $headers .= "Content-Type: multipart/mixed;"; 
        $headers .= " boundary=\"{$mime_boundary}\"\r\n";
   
    
        switch ($tipo) {
            case 0: // Form de inscrição recebido, pede confirmacao
                
                // prepara link de confirmacao a incluir no email
                $link = "<a href=" . $external_url . "registo/confirma.php?confirma=" . $cod_confirm ."&email=". $email . "><b> Confirmo!</b></a>";

                // prepara o corpo da mensagem em HTML
                $msg_body  = "<html><head></head><body>";
                $msg_body .= "<br><p>O seu registo no Summit 1.0 foi recebido. ";
                $msg_body .= "No entanto, só se tornará válido após confirmação.</p>";
                $msg_body .= "<p>Por favor confirme a inscrição clicando no seguinte link: ";
                $msg_body .= $link . "</p>";
                $msg_body .= "<p>Obrigado</p><br>";
                $msg_body .= "</body></html>";

                // prepara a mensagem com o corpo
                $msg = "\r\n--{$mime_boundary}\r\n";
                $msg .= "Content-Type: text/html; charset=utf_8\n";
                $msg .= "Content-Transfer-Encoding: 8bit\n\n"; 
                $msg .= "\n" . $msg_body . "\n\n"; 
                $msg .= "\r\n--{$mime_boundary}--\r\n";

                break;
                
            case 1: // User confirmou, agradecimento, mensagem com QR e Link de cancelamento
                
                // prepara link de cancelamento a incluir no email
                $link = "<a href=" . $external_url . "registo/cancela.php?confirma=" . $cod_confirm ."&email=". $email . "><b> Cancelo a inscrição!</b></a>";

                // prepara o corpo da mensagem em HTML
                $msg_body  = "<html><head></head><body>";
                $msg_body .= "<br><p>O seu registo no Summit 1.0 foi <b>confirmado!<b></p> ";
                $msg_body .= "<p>O \"QR Code\" anexo deve ser apresentado à entrada do evento, constituindo a prova da sua identidade.</p><br>";
                $msg_body .= "Se entretanto pretender cancelar a sua inscrição, por clique no seguinte link </p>";
                $msg_body .= $link . "</p><br>";
                $msg_body .= "<p>Obrigado</p><br>";
                $msg_body .= "</body></html>";

                // prepara a mensagem com o corpo
                $msg = "\r\n--{$mime_boundary}\r\n";
                $msg .= "Content-Type: text/html; charset=utf_8\n";
                $msg .= "Content-Transfer-Encoding: 8bit\n\n"; 
                $msg .= "\n" . $msg_body . "\n\n"; 
                $msg .= "\r\n--{$mime_boundary}\r\n";


                // prepara o conteudo da imagem 

                $filename = "http://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . $email . "%20" . $codigo;

                $fname = "Registo_Summit_1_0.png";

                $string_img = file_get_contents($filename);// 
                $data = chunk_split(base64_encode ($string_img));

                // prepara a mensagem com a imagem
                //$msg .= "Content-Type: {\"application/octet-stream\"};\n";
                //$msg .= " name=\"".$fname."\"\n";
                //$msg .= "Content-Disposition: attachment;\n";
                //$msg .= " filename=\"$fname\"\n";
                $msg .= "Content-Type: image/png;\n";
                $msg .= "Content-Disposition: inline;\n";
                $msg .= " filename=\"$fname\"\n";
                $msg .= "Content-Transfer-Encoding: base64\n\n"; 
                $msg .= $data . "\n\n";
                $msg .= "\r\n--{$mime_boundary}--\r\n";
                
                break;
                
            case 2: // Já estava confirmado, reenvia QR e Link para cancelamento
                
                // prepara link de cancelamento a incluir no email
                $link = "<a href=" . $external_url . "registo/cancela.php?confirma=" . $cod_confirm ."&email=". $email . "><b> Cancelo a inscrição!</b></a>";

                // prepara o corpo da mensagem em HTML
                $msg_body  = "<html><head></head><body>";
                $msg_body .= "<br><p>O seu registo no Summit 1.0 já estava aceite e confirmado. ";
                $msg_body .= "<p>O \"QR Code\" anexo deve ser apresentado à entrada do evento, constituindo a prova da sua identidade.</p><br>";
                $msg_body .= "Se, entretanto, pretender cancelar a sua inscrição, por clique no seguinte link </p>";
                $msg_body .= $link . "</p><br>";
                $msg_body .= "<p>Obrigado</p><br>";
                $msg_body .= "</body></html>";

                // prepara a mensagem com o corpo
                $msg = "\r\n--{$mime_boundary}\r\n";
                $msg .= "Content-Type: text/html; charset=utf_8\n";
                $msg .= "Content-Transfer-Encoding: 8bit\n\n"; 
                $msg .= "\n" . $msg_body . "\n\n"; 
                $msg .= "\r\n--{$mime_boundary}\r\n";


                // prepara o conteudo da imagem 

                $filename = "http://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . $email . "%20" . $codigo;

                $fname = "Registo_Summit_1_0.png";

                $string_img = file_get_contents($filename);// 
                $data = chunk_split(base64_encode ($string_img));

                // prepara a mensagem com a imagem
                //$msg .= "Content-Type: {\"application/octet-stream\"};\n";
                //$msg .= " name=\"".$fname."\"\n";
                //$msg .= "Content-Disposition: attachment;\n";
                //$msg .= " filename=\"$fname\"\n";
                $msg .= "Content-Type: image/png;\n";
                $msg .= "Content-Disposition: inline;\n";
                $msg .= " filename=\"$fname\"\n";
                $msg .= "Content-Transfer-Encoding: base64\n\n"; 
                $msg .= $data . "\n\n";
                $msg .= "\r\n--{$mime_boundary}--\r\n";
            
                break;
            
            
            case 3: // Confirma cancelamento da inscrição

                // prepara o corpo da mensagem em HTML
                $msg_body  = "<html><head></head><body>";
                $msg_body .= "<br><p>O seu registo no Summit 1.0 foi <b>cancelado.<b> ";
                $msg_body .= "Se ainda assim pretender participar, por favor faça nova inscrição e não se esqueça, depois, de a confirmar.</p><br>";
                $msg_body .= "<p>Obrigado</p><br>";
                $msg_body .= "</body></html>";

                // prepara a mensagem com o corpo
                $msg = "\r\n--{$mime_boundary}\r\n";
                $msg .= "Content-Type: text/html; charset=utf_8\n";
                $msg .= "Content-Transfer-Encoding: 8bit\n\n"; 
                $msg .= "\n" . $msg_body . "\n\n"; 
                $msg .= "\r\n--{$mime_boundary}\r\n";

                break;
            }



        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);

        // send email
        $to = ($test ? "joao.ledo.fonseca@gmail.com" : $email);
        
        if (mail($to, "Summit 1.0 - V.N.G.", $msg, $headers)) {
            if ($test) {
             echo json_encode(array("message" => 'Your mail has been sent successfully.'));          
            }
        } else {
            if ($test) {
            echo json_encode(array("message" => 'Unable to send email. Please try again.'));
            }
        }
        // end of the message         

        if ($test) {
            echo "\n Teste=". $test;
            echo "\n Destino=". $to;
            echo "\n Headers=\n". $headers;
            echo "\n Mensagem=\n". $msg;    
        }
}
?>