<?php

if($_POST['email']!=""){

     $to = "pamidikumar@gmail.com";
     $headers = 'From: pamidikumar@gmail.com' . "\r\n" .
    'Reply-To: '.$_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


    $subject = "Service Form -Dr. Arya's Multispeciality Dental Hospital";

    //Data from Enquiery Form form

    $message=
    "Name:".$_POST['name']."\n".
    "Email: ".$_POST['email']."\n".
    "Servie: ".$_POST['service']."\n";

    if(mail($to,$subject,$message,$headers)){

        header("location:thank-you-2.php");
    }
    else
    {
        echo "mail sent failed";
    }
}

?>




