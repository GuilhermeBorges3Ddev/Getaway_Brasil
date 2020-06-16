<?php
    $for = $_POST['email'];

    // Using another two variables to be incorporated into the mail message 
        $nome = 'Rafael D. Ribeiro (CEO)';
        $email = 'reservas@getawaybrasil.com.br';

    // Mount body message with these fields
        $body = "Você cadastrou o email: $for na plataforma da Getaway Brasil.Com isso, você receberá todas as nossas novidades, roteiros, e muito mais! Parabéns por nos escolher :)";
        
    // Mail header
        $email_headers = "Viagens Getaway" . "\r\n";
        $email_headers .= '-- ' .$nome.'<'.$email.'>'."\r\n";


    // Field verification to send notification mail
    $sender = mail($for, $email_headers, $body);
    if ($sender) {
        $msg = "Email para recebimento de novidades cadastrado com sucesso. Clique em OK para continuar!";
        echo "<script>alert('$msg');window.location.assign('https://getawaybrasil.com.br');</script>";
    } else {
        $msg = "Erro ao cadastrar seu email, verifique se o que foi digitado corresponde à um email válido. Clique em OK para continuar!";
        echo "<script>alert('$msg');window.location.assign('https://getawaybrasil.com.br');</script>";
    }
?>