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

    <title>Exemplo_Projeto</title>
  </head>
<body id="fundo">


     <?php  require "topo.php"; ?>
    
    <div class="container">
        <form action="cadastro_action_fornecedor.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="texto1" style="text-align: center;margin-top: 2%;margin-bottom: 5%">Cadastro Fornecedor</h1>                
                </div>
            </div>     
            
            <div class="row"> 
                    <div class="col-md-6">
                        <label>Nome</label>
                        <input type="text" class="form-control" placeholder="Nome" name="nome">
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
            </div> 
            <div class="row"> 
                    <div class="col-md-4">
                        <label>Telefone</label>
                        <input type="number" class="form-control" placeholder="Telefone" name="telefone">
                    </div>
                    <div class="col-md-4">
                        <label>Celular</label>
                        <input type="number" class="form-control" placeholder="Celular" name="celular">
                    </div>
                    <div class="col-md-4">
                        <label>Sexo</label>
                            <select class="form-select" name="sexo">
                            <option value="" selected>Selecione</option>
                            <option value="Homem">Homem</option>
                            <option value="Mulher">Mulher</option>
                        </select>
                    </div>
            </div>
            <div class="row"> 
                    <div class="col-md-3">
                       <label>Estado</label>
                        <select class="form-select" name="estado">
                             <option value="" selected>Selecione</option>
                            <option value="RS">RS</option>
                            <option value="RJ">Rj</option>
                            <option value="ES">ES</option>
                            <option value="SC">SC</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Cidade</label>
                        <select class="form-select" name="cidade">
                            <option value="">Selecione</option>
                            <option value="Caxias">Caxias</option>
                            <option value="Gramado">Gramado</option>
                             <option value="Faxinal">Faxinal</option>
                              <option value="">Canela</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Bairro</label>
                        <input type="text" class="form-control" placeholder="Bairro" name="bairro">
                    </div>
                    <div class="col-md-3">
                        <label>Numero</label>
                        <input type="number" class="form-control" placeholder="Numero" name="numero">
                    </div>
            </div>
        <div class="row" style="text-align: center;margin-top: 1%;">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary"  name="enviar" >Enviar</button>
                </div>
                
        </div>
       </form>
    </div>










 
</body>
</html>
<script src="cadastro_action_fornecedor.php"></script>