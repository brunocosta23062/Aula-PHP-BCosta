<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../PHPMailer-master/src/Exception.php';
require_once __DIR__ . '/../PHPMailer-master/src/PHPMailer.php';
require_once __DIR__ . '/../PHPMailer-master/src/SMTP.php';

function configurarMailer() {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 't88422858@gmail.com';
    $mail->Password = 'cxaquvkbhlhdarad';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('SEUEMAIL@gmail.com', 'Locadora');

    return $mail;
}