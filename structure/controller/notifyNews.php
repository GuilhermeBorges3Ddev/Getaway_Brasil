<?php
    $for = $_POST['email'];
    $about = "Bem vindo à Getaway Brasil";
    $html = require('./chimpMail.html');
    $headers = "Content-type: text/html;\r\n";

    // Field verification to send notification mail
    $sender = mail($for, $about, $html, $headers);
    if ($sender) {
        $msg = "Email para recebimento de novidades cadastrado com sucesso. Clique em OK para continuar!";
        echo "<script>alert('$msg');window.location.assign('https://getawaybrasil.com.br');</script>";
    } else {
        $msg = "Erro ao cadastrar seu email, verifique se o que foi digitado corresponde à um email válido. Clique em OK para continuar!";
        echo "<script>alert('$msg');window.location.assign('https://getawaybrasil.com.br');</script>";
    }
?>