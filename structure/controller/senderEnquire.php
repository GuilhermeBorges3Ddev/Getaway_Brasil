<?php
    $for = 'reservas@getawaybrasil.com.br';
    $subject = $_POST['subject'];

    // Contact form fields
        $name = $_POST['name'];
        $mail = $_POST['email'];
        $phone = $_POST['phone'];
        $datetravel = $_POST['datetravel'];
        $accompany = $_POST['accompany'];

    // Mount body message with these fields
        $body = "<html><body>";
        $body .= "Nome: $name <br \> 
                  Email: $mail <br \>   
                  Telefone: $phone <br \>
                  Data de embarque: $datetravel <br \>
                  Número de acompanhantes: $accompany <br \>
                  Inclui criança(true para sim e false para não): $withChildren <br \>
                ";
        $body .= "</body></html>";

    // Mail header
        $email_headers = "MIME-Version: 1.0" . "\r\n";
        $email_headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
        $email_headers .= 'From: ' .$name.'<'.$mail.'>'."\r\n";

    // Field verification to send mail
    if (mail($for, $subject, $body, $email_headers)) {
        $msg = "Sua mensagem foi enviada com sucesso. Clique em OK!";
        echo "<script>alert('$msg');window.location.assign('https://getawaybrasil.com.br/');</script>";
    } else {
        $msg = "Erro ao enviar a mensagem, preencha todos os campos. Clique em OK!";
        echo "<script>alert('$msg');window.location.assign('https://getawaybrasil.com.br/');</script>";
    }
?>