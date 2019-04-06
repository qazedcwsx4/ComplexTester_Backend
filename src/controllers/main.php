<?php

function main(&$model)
{
    $file = 'orders.txt';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = trim((string)$_POST['email']);
        $purpose = trim((string)$_POST['purpose']);
        $description = trim((string)$_POST['description']);
        $audience = $_POST['audience'];
        $platforms = $_POST['platforms'];

        $message =
            'email: '.$email."\r\n".
            'purpose: '.$purpose."\r\n".
            'audience: '.$audience."\r\n".
            'platforms: '.$platforms."\r\n".
            'description: '.$description."\r\n"."\r\n";

        file_put_contents($file,$message,FILE_APPEND);
        $_SESSION['toasts'][]="Your message was delivered. I will get back to you as soon as I can.";
        return 'redirect:/';
    }
    return 'mainView';
}