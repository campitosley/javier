<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $to = "rapidclimate@facebook.com";
    $subject = "Test mail";
    $message = "Hello! This is a simple email message.";
    $from = "rapidclimate@facebook.com";
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent.";
?>
