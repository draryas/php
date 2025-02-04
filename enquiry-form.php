<?php

if($_POST['email']!=""){

     $to = "pamidikumar@gmail.com,drraryadentals@gmail.com";
     $headers = 'From: Dr. Aryas Multispeciality Dental Hospital <pamidikumar@gmail.com>' . "\r\n" .
    'Reply-To: '.$_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


    $subject = "Enquiry Form -Dr. Arya's Multispeciality Dental Hospital";

    //Data from Enquiery Form form

    $message=
    "Name:".$_POST['name']."\n".
    "Phone: ".$_POST['mobile']."\n".
    "Email: ".$_POST['email']."\n".
    "Date: ".$_POST['date']."\n".
    "Location: ".$_POST['type']."\n";

    if(mail($to,$subject,$message,$headers)){

        header("location:thank-you-2");
    }
    else
    {
        echo "mail sent failed";
    }
}

?>







