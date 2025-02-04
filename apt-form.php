<?php

if($_POST['email']!=""){

     $to = "pamidikumar@gmail.com";
     $headers = 'From: Dr. Aryas Multispeciality Dental Hospital <pamidikumar@gmail.com>' . "\r\n" .
    'Reply-To: '.$_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


    $subject = "Book An Appointment - Dr. Arya's Multispeciality Dental Hospital";

    //Data from Enquiery Form form

    $message=
    "Name:".$_POST['name']."\n".
    "Email: ".$_POST['email']."\n".
    "Phone: ".$_POST['phone']."\n".
    "Subject: ".$_POST['subject']."\n".
    "Date: ".$_POST['date']."\n".
    "Time: ".$_POST['time']."\n".
    "Message: ".$_POST['message']."\n";

    if(mail($to,$subject,$message,$headers)){

        header("location:thank-you");
    }
    else
    {
        echo "mail sent failed";
    }
}

?>




