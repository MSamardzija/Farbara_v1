<?php
    if(isset($_POST['btnSubmit'])){
        $name = $_POST['txtName'];
        $visitor_email = $_POST['txtEmail'];
        $phone = $_POST['txtPhone'];
        $message = $_POST['txtMsg'];
        $link_address = "https://farbaras.rs/kontakt.html";

        $to='farbarass@gmail.com';
        $email_subject = 'Poruka sa Web Sajta Farbara S';
        $email_body = "Poruku salje: $name.\n".
        "Mail posiljaoca: $visitor_email.\n". 
        "Kontakt telefon: $phone.\n\n". 
        "Poruka: $message.\n";
        $headers = "From: $visitor_email \r\n";

        if(mail($to, $email_subject, $email_body, $headers)){
            echo "<h1>Poruka je uspešno poslata! <br> <a href='".$link_address."'> Povratak nazad </a></h1>";
        }
        else{
            echo "<h1>Poruka nije poslata ! <br><a href='".$link_address."'>Pokušajte ponovo</a></h1>";
        }
    }
?>