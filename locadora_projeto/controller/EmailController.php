<?php

require_once '../PHPMailer-master/src/PHPMailer.php';
require_once '../PHPMailer-master/src/SMTP.php';
require_once '../PHPMailer-master/src/Exception.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
 // Configurar e enviar o e-mail
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;
            $mail->Username = 't88422858@gmail.com';
            $mail->Password = 'cxaquvkbhlhdarad';
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->CharSet = 'UTF-8';

            $mail->setFrom('t88422858@gmail.com', 'Email para envio de informações');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Teste de email';

                $mail->Body = "
                    <strong>Aqui esta o Nome do remetente</strong>
                    <p>$nome</p>
                    <strong>Aqui esta o assunto</strong>
                    <p>$email</p>
                    <strong>Aqui esta a mensagem</strong>
                    <p>$mensagem</p>
                    ";


                // Enviar o e-mail antes de retornar a resposta
                if ($mail->send()) {
                    echo "<script> alert('Email enviado com sucesso');window.location.href='enviar_email.php'; </script>"; 
                } else {
                    error_log('Erro ao enviar e-mail: ' . $mail->ErrorInfo);
                }
            } catch (Exception $e) {
                echo "<script> alert('Erro ao enviar o email');window.location.href='enviar_email.php'; </script>"; 
            }
            
?>

