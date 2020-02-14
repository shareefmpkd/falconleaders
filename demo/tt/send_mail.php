<?php

if ($_POST['submit']) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: agriindiaexp.com'; 
    $to = 'shareefmpkd@gmail.com'; 
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    if (mail ($to, $subject, $body, $from)) { 
       $success = "Message successfully sent";
    } else {
        $success = "Message Sending Failed, try again";
    }

    echo $success;
}
?>