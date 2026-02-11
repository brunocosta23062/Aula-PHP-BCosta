
<?php


  session_start();
  if($_SESSION['logado'] == FALSE){

   echo "<script> alert('Por favor, faça login '); window.location.href='../index.php'; </script>";




  }




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="estilo_projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Projeto Cliente</title>
  </head>
  <body id="caixaInfo">

    <?php  require "topo.php"; ?>

         
    
    <div class="container" id="corpoInfo">
      <div class="row"> 
          <div class="col-md-12" >
            <h1 style="margin-bottom: 3%;" >Sobre a Empresa</h1>
          </div>
      <div class="row"> 
          <div class="col-md-6">
            <p><br> <h5>Nossa História</h5></br>
              Fundada com o propósito de transformar a maneira como nossos clientes interagem com serviços tecnológicos, nossa empresa nasceu da necessidade de simplificar processos complexos. Ao longo dos anos, evoluímos de uma pequena startup para uma referência no setor, sempre priorizando a transparência e a eficiência.

              </p>
          </div>
          <div class="col-md-6">
            <p><br> <h5>O Sistema de Consultas</h5></br>
              Este sistema (Versão 1.0) foi desenvolvido sob demanda do Conselho Administrativo para ser o canal direto entre você e nossas soluções. Aqui, você pode gerenciar cadastros de clientes e fornecedores de forma segura e intuitiva.

            </p>
          </div>
      </div>
        <div class="row">
          <div class="col-md-7"  style="margin-left: 20%;"> 
            <p><br> <h4>Agradecimento</h4></br>
              Gostaria de expressar meu sincero agradecimento pela sua parceria e pela confiança depositada em nosso trabalho. É um privilégio contar com sua colaboração, e saber que nossas interações contribuem para o seu dia a dia é o que nos motiva a buscar constantemente a excelência. Valorizamos muito a sua presença e seguimos à disposição para apoiar seus projetos e objetivos com toda a dedicação que você merece.

            </p>
          </div>
      </div>
      
</div>





    
   




























   
  
  </body>
</html>