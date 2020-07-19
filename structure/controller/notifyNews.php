<?php
    $forReserva = 'reservas@getawaybrasil.com.br';
    $for = 'gsilvaborges@gmail.com';
    $subject = 'Novo usuário inscrito na Getaway para o recebimento de novidades.';

    // Contact form fields
    $email = $_POST['email'];
     

    // Mount body message with these fields
        $body = "<html><body>";
        $body .= "Email do remetente que deseja receber novidades: $email <br \>";
        $body .= "</body></html>";

    // Mail header
        $email_headers = "MIME-Version: 1.0" . "\r\n";
        $email_headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
        $email_headers .= 'From: <'.$email.'>'."\r\n";


    // Field verification to send mail
    $sender = mail($for, $subject, $body, $email_headers);
    if ($sender) {
        $msg = "Email para recebimento de novidades cadastrado com sucesso. Clique em OK para continuar!";
        echo "<script>alert('$msg');window.location.assign('https://getawaybrasil.com.br');</script>";
    } else {
        $msg = "Erro ao cadastrar seu email, verifique se o que foi digitado corresponde à um email válido. Clique em OK para continuar!";
        echo "<script>alert('$msg');window.location.assign('https://getawaybrasil.com.br');</script>";
    }
?>