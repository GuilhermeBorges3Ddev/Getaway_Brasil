<?php
    if(isset($_POST['submit']))
    {
        //Getters from HTML captured by the $_POST 
        $name = $_POST['name']; 
        $email = $_POST['email'];
        $subject = $_POST['subject']; 
        $msg = $_POST['message'];
        
        //Setters 
        $to = "gsilvaborges@gmail.com"; 
        $about = "'$subject' lhe enviou um email via site da Getaway!";
         
        // Begin of HTML body of the mail 
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Nome do cliente: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email do cliente: </strong></td>
                            <td style='width:400px'>$email</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mensagem: </strong></td>
                            <td style='width:400px'>$message</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // End of HTML body of the mail 
         
        // Generate setting to content-type when mail-HTML be sent
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // Headers section
            //$headers .= 'From: Admin <admin@getaway.com>' . "\r\n";
            //$headers .= 'Cc: programmer@getaway.com' . "\r\n";
            //$headers .= 'Bcc: ceo@getaway.com' . "\r\n";
         
        if(mail($to,$about,$message,$headers)){
            // Email sent succesfully
            echo "<script>
                    alert('Email enviado com sucesso!');
                </script>";
        }
 
        else{
            // If not success
            echo "<script>
                    alert('FALHA. Revise se preencheu corretamente o formulário de contato!');
                </script>";
        }
    }
?>