<?php       

function envia_email($tipo, $email, $codigo, $cod_confirm)
    {
       // Envio do email
        
        global $test;
        global $test_email;
        global $external_url;
        
        // boundary 
        $semi_rand = md5(time()); 
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
        
        //headers
        $headers = "From: Summit 1.0 - V.N.Gaia \r\n";
        $headers = "MIME-Version: 1.0 \r\n"; 
        $headers .= "Content-Type: multipart/mixed;"; 
        $headers .= " boundary=\"{$mime_boundary}\"\r\n";
   
        $msg="";
    
        switch ($tipo) {
            case 1: // Registo aceite, pede confirmacao
                
                // prepara link de confirmacao a incluir no email
                $link = "<a href=" . $external_url . "registo/confirma.php?confirma=" . $cod_confirm ."&email=". $email . "><b> Confirmo!</b></a>";

                // prepara o corpo da mensagem em HTML
                $msg_body  = "<html><head></head><body>";
                $msg_body .= "<br><p>O seu pré-registo no Summit 1.0 foi recebido. ";
                $msg_body .= "No entanto só se tornará válido após confirmação.</p>";
                $msg_body .= "<p><b>Por favor confirme<b> a inscrição clicando no seguinte link: ";
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
                
            case 2: // Confirmacão aceite, agradecimento, com QR e Link de cancelamento da inscrição

                // prepara link de cancelamento a incluir no email
                $link = "<a href=" . $external_url . "registo/cancela.php?confirma=" . $cod_confirm ."&email=". $email . "><b> Quero cancelar a inscrição!</b></a>";

                // prepara o corpo da mensagem em HTML
                $msg_body  = "<html><head></head><body>";
                $msg_body .= "<br><p>O seu registo no Summit 1.0 foi confirmado.</p>";
                $msg_body .= "<p>Se pretender anular esta inscrição, por favor clique o seguinte link: ";
                $msg_body .= $link . "</p>";
                $msg_body .= "<p>O \"QR Code\" anexo deve ser apresentado à entrada do evento, constituindo a prova da sua identidade.</p>";
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
                
                
            case 3: // Já estava confirmadom QR e Link de anulacao
                
                // prepara link de cancelamento a incluir no email
                $link = "<a href=" . $external_url . "registo/cancela.php?confirma=" . $cod_confirm ."&email=". $email . "><b>Quero cancelar a inscrição!</b></a>";

                // prepara o corpo da mensagem em HTML
                $msg_body  = "<html><head></head><body>";
                $msg_body .= "<br><p>O seu registo no Summit 1.0 já se encontrava válido e confirmado. </p>";
                $msg_body .= "Se pretender cancelar esta inscrição, por favor clique no seguinte link: ";
                $msg_body .= $link . "</p>";
                $msg_body .= "<p>Recordamos que na entrada do evento deverá apresentar o \"QR Code\" que lhe foi anteirormente enviado, constituindo a prova da inscrição e sua identidade.</p>";
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
                 
            case 4: // Confirma anulacao
                                // prepara link de confirmacao a incluir no email
                $link = "<a href=" . $external_url . "registo/confirma.php?confirma=" . $cod_confirm ."&email=". $email . "><b> Confirmo!</b></a>";

                // prepara o corpo da mensagem em HTML
                $msg_body  = "<html><head></head><body>";
                $msg_body .= "<br><p>O seu registo no Summit 1.0 foi cancelado. ";
                $msg_body .= "<p>Se entretanto pretender fazer nova inscrição, por favor use o formulário disponivel no site ";
                
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
        $to = ( !empty($test_email) ? $test_email : $email);
        
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