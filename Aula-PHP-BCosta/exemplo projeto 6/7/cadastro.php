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
        <form action="cadastro_action.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="texto1" style="text-align: center;margin-top: 2%;margin-bottom: 5%">Cadastro de pessoa fisica</h1>                
                </div>
            </div>     
            
            <div class="row" style="margin-left: 34%;" > 
                    <div class="col-md-4">
                        <label>Nome</label>
                        <input type="text" class="form-control" placeholder="Nome" name="nome">
                    </div>
                    <div class="col-md-2">
                        <label>Idade</label>
                        <input type="text" class="form-control" placeholder="Idade" name="idade">
                    </div>
            </div> 
            <div class="row"  style="margin-left: 34%;"> 
                    <div class="col-md-4">
                        <label>RG</label>
                        <input type="text" class="form-control" placeholder="RG" name="rg">
                    </div>
                    <div class="col-md-2">
                        <label>CPF</label>
                        <input type="text" class="form-control" placeholder="CPF" name="cpf">
                    </div>
                    <div class="col-md-2">
                            <label>Estado Civil</label>
                            <input type="text" class="form-control" placeholder="Estado Civil" name="estado">
                    </div>
            </div>
            <div class="row"  style="margin-left: 34%;"> 
                    <div class="col-md-4">
                        <label>Bairro</label>
                        <input type="text" class="form-control" placeholder="Bairro" name="bairro">
                    </div>
                    <div class="col-md-2">
                        <label>N°</label>
                        <input type="text" class="form-control" placeholder="N°" name="numero">
                    </div>
            </div>
        <div class="row" style="text-align: center;margin-top: 2%;">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="width: 30%;text-align: center;" name="enviar">Enviar</button>
                </div>
        </div>
       </form>
    </div>










 
</body>
</html>