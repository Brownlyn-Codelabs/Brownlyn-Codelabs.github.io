<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'Daniel Brown/s Portfolio';
    $email_subject = 'New Message From Browns|Portfolio Contact';
    $email_message = "Name : $name.\n".
                    "Email : $email.\n".
                        "Message : $message.\n";

    $to = "D.brown.db649@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-TO : $email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    
    header("location : success.html");


?>