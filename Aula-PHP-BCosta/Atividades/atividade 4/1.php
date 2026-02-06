<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="funcao.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exemplo_Projeto</title>
  </head>
<body id="fundo">



    
    <div class="container">
        <form action="funcao.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="texto1" style="text-align: center;">Avaliação</h1>                
                </div>
            </div>     
            
            <div class="row"  > 
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Razão Social" name="nome">
                    </div>
            </div> 
            <div class="row"> 
                <div class="col-md-6">
                        <label>    </label>
                        <input type="number" class="form-control" placeholder="CNPJ" name="cnpj">
                </div>
                <div class="col-md-6">
                        <label >    </label>
                        <input type="text" class="form-control" placeholder="Inscrição Estadual" name="insc">
                </div>
            </div>   
            <div class="row">                 
                    <div class="col-md-6">
                        <label>   </label>
                        <input type="text" class="form-control" placeholder="Logradouro" name="lougra">
                    </div>
                    <div class="col-md-6">
                        <label>   </label>
                        <input type="text" class="form-control" placeholder="Bairro" name="bairro">
                    </div>
            </div>          
                <div class="row"> 
                    <div class="col-md-6">
                        <label>    </label>
                        <input type="text" class="form-control" placeholder="Municipio" name="municipio">
                    </div>
                    <div class="col-md-6">
                        <label >    </label>
                        <input type="text" class="form-control" placeholder="UF" name="uf">
                    </div>                   
                    <div class="col-md-6">
                        <label>   </label>
                        <input type="number" class="form-control" placeholder="CEP" name="cep">
                    </div>
                    <div class="col-md-6">
                        <label>   </label>
                        <input type="number" class="form-control" placeholder="Telefone" name="telefone">
                    </div>
                    <div class="col-md-12">
                        <label>   </label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    
                </div>    
            <div class="row" style="margin-top: 2%;">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-danger" style="margin-left: 95%;" name="enviar">Enviar</button>
                </div>
                

                
              
                
        </div>
       </form>
    </div>










 
</body>
</html>
<script src="funcao.php"></script>