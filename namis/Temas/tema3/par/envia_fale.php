<?php
echo "holaaaaaaaaaaaaaaaaa"; 
if(isset($_POST['submit'])){
    $to = "stefanicaguiar1993@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $subject = "OnlyPans.ie form submission";
    $subject2 = "Copy of your form submission";
    $message = "You have received a new offer from " . $full_name . "\n\n" . $_POST['offer'];
    $message2 = "Here is a copy of your message " . $full_name . "\n\n" . $_POST['offer'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Email sent. Thank you " . $full_name . ", we will contact you shortly.";
    }
    echo "holaaaaaaaaaaaaaaaaa";
?>