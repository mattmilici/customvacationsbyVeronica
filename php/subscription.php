<?php
$email = $_POST['sub_email'];




$to = 'themewar@gmail.com';
$subject = 'Quick Travel Subscription';

$message = 'Subscription Request Received From Quick Travel:<br/><br/>';
$message .= '<strong>Email : </strong>'.$email.'<br/><br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

mail($to,$subject,$message,$headers);
echo 1;