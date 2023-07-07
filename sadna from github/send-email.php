<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'your-email@example.com';
    $subject = 'Contact Form Message';
    $message = 'From: '.$name."\n".'Email: '.$email."\n".'Message: '.$message;
    $headers = 'From: webmaster@example.com';

    mail($to, $subject, $message, $headers);
}
?>
