<?php
    $for = 'reservas@getawaybrasil.com.br';
    $subject = $_POST['subject'];

    // Contact form fields
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

    // Mount body message with these fields
        $body = "<html><body>";
        $body .= "Nome: $nome <br \> Email: $email <br \> Telefone: $phone <br \> Mensagem: $message";
        $body .= "</body></html>";

    // Mail header
        $email_headers = "MIME-Version: 1.0" . "\r\n";
        $email_headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
        $email_headers .= 'From: ' .$nome.'<'.$email.'>'."\r\n";


    // Field verification to send mail
    $sender = mail($for, $subject, $body, $email_headers);
    if ($sender) {
        $msg = "Sua mensagem foi enviada com sucesso. Clique em OK!";
        echo "<script>alert('$msg');window.location.assign('https://getawaybrasil.com.br');</script>";
    } else {
        $msg = "Erro ao enviar a mensagem, preencha todos os campos. Clique em OK!";
        echo "<script>alert('$msg');window.location.assign('https://getawaybrasil.com.br');</script>";
    }
?>