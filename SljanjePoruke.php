<?php

    $name = $_POST['txtName'];
    $visitor_email = $_POST['txtEmail'];
    $phone = $_POST['txtPhone'];
    $message = $_POST['txtMsg'];

    $email_form = 'nope@gmail.com';

    $email_subject = 'Poruka sa Web Sajta';
    
    $email_body = "Poruku salje: $name.\n".
                    "Mail posiljaoca: $visitor_email.\n". 
                    "Kontakt telefon: $phone.\n". 
                    "Poruka: $message.\n";
    $to = "nope@gmail.com"
    $headers = "From: $email_from \r\n";
    $headers .= "Replay-To: $visitor_email \r\n";
    // Nije jos spremno
    
    mail($to, $email_subject, $email_body, $headers);
    header("location: /index.html");
?>