<?php

require_once '../PHPMailer-master/src/PHPMailer.php';
require_once '../PHPMailer-master/src/SMTP.php';
require_once '../PHPMailer-master/src/Exception.php';

if(isset($_POST['mail'])){

$nome_reme = $_POST['nome_reme'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$email = $_POST['email'];

if(empty(trim($nome_reme))){
echo "<script> alert('Campo Nome do remetente em branco');window.location.href='enviar_email.php'; </script>";
exit;
}
if(empty(trim($email))){
echo "<script> alert('Campo Email em branco');window.location.href='enviar_email.php'; </script>";
exit;
}
if(empty(trim($assunto))){
echo "<script> alert('Campo Assunto em branco');window.location.href='enviar_email.php'; </script>";
exit;
}
if(empty(trim($mensagem))){
echo "<script> alert('Campo Mensagem em branco');window.location.href='enviar_email.php'; </script>";
exit;
}

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
<p>$nome_reme</p>
<strong>Aqui esta o assunto</strong>
<p>$assunto</p>
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
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>Imoveis</title>
</head>
<body>

<?php require "../Includes/topo.php";?>

<div class="container">
<h1 style="text-align: center;">Envio de email de satisfação</h1>

<form action="" method="post">

<div class="row" style="margin-top: 3%;">
<div class="col-md-4">
<label for="">Nome do remetente</label>
<input type="text" class="form-control" name="nome_reme">
</div>
<div class="col-md-4">
<label for="">Email</label>
<input type="email" class="form-control" name="email">
</div>
<div class="col-md-4">
<label for="">Assunto do email</label>
<input type="text" class="form-control" name="assunto">
</div>
</div>
<div class="row" style="margin-top: 3%;">
<div class="col-md-12">
<label>Mensagem</label>
<textarea class="form-control" name="mensagem" rows="4"></textarea>
</div>
</div>
<div class="row" style="margin-top: 3%;">
<div class="col-md-12">
<button style="width: 100%;" class="btn btn-warning" name="mail">Mandar email</button>
</div>
</div>

</form>
</div>















 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>
</html>