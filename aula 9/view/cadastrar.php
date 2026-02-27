
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
<body >


    <div class="container">
<?php
        require "../includes/topo.php";
?>
        <form action="../Services/validacao.php" method="post">

            <div class="row">
                <div class="col-md-12">
                    <h1 id="texto1" style="text-align: center;margin-top: 2%;margin-bottom: 5%">Editar Livros</h1>                
                </div>
            </div>     
            
            <div class="row"> 
                    <div class="col-md-6">
                        <label>Nome Do Livro</label>
                        <input type="text" class="form-control" placeholder="nome" name="nome" aria-placeholder="Nome Do Livro">
                        
                    </div>
                    <div class="col-md-6">
                        <label>Descrição</label>
                        <input type="text" class="form-control" placeholder="Descricão do livro" name="descricao"  >
                    </div>
            </div> 
             <div class="row"> 
                    <div class="col-md-6">
                        <label>Genero</label>
                        <input type="text" class="form-control" placeholder="genero" name="genero" aria-placeholder="Genero">
                        
                    </div>
                    <div class="col-md-6">
                        <label>Quantidade De Paginas</label>
                        <input type="text" class="form-control" placeholder="Quantidade De Pagina" name="quantidade">
                    </div>
            </div> 
           
        <div class="row" style="text-align: center;margin-top: 2%;">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="width: 100%;text-align: center;" name="enviar">enviar</button>
                </div>
        </div>
       </form>
    </div>










 
</body>
</html>

