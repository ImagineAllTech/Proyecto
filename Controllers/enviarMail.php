<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['Nombre']) && !empty($_POST['Email']) && !empty($_POST['Asunto']) && !empty($_POST['Mensaje']) ){
        $nombre = $_POST['Nombre'];
        $email = $_POST['Email'];
        $asunto = $_POST['Asunto'];
        $mensaje = $_POST['Mensaje'];

        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();

        $mail = mail($email,$asunto,$nombre,$mensaje,$header);
        if ($mail){
            echo "<h4>Mail enviado correctamente</h4>";
        } else{
            echo "<h4>No se envio</h4>";
        }
    }
}

?>