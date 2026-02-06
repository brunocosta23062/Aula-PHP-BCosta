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
                    <h1 id="texto1" style="text-align: center;">Cadastro Cliente</h1>                
                </div>
                <h2>Dados pessoais</h2>
            </div>     
            
            <div class="row"  > 
                    <div class="col-md-12">
                        <label>Nome Do Cliente</label>
                        <input type="text" class="form-control" placeholder="Nome Do Cliente" name="nome">
                    </div>
            </div> 
            <div class="row" > 
                    <div class="col-md-4">
                         <label>CPF</label>
                        <input type="number" class="form-control" placeholder="000.000.000-00" name="cpf">
                    </div>
                    <div class="col-md-4">  
                    
                        <label>Data de nascimento</label>
                        <input type="date" class="form-control" placeholder="" name="date">
                    </div> 
                    <div class="col-md-4">  
                        
                        <div class="row" style="margin-bottom: 2%;">
                            <label>Sexo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="masculino">
                            <label class="form-check-label" for="inlineRadio1">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="feminino">
                            <label class="form-check-label" for="inlineRadio2">Feminino</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Estado Civil</label>
                            <select class="form-select" name="estado">
                            <option value="">Selecionar</option>
                            <option value="Solteiro">Solteiro</option>
                            <option value="Casado">Casado</option>
                            <option value="Divorciado">Divorciado</option>
                        </select>                            
                    </div>
                    <div class="col-md-6">
                        <label>Renda mensal</label>
                        <input type="number" class="form-control" placeholder="0,00" name="renda">
                    </div>
            <div class="row" style="margin-top: 1%;">
                <div class="col-md-12">
                    <button type="submit " class="btn btn-primary" name="enviar" >Cadastrar</button>
                </div>
                

                
              
                
        </div>
       </form>
    </div>










 
</body>
</html>
<script src="funcao.php"></script>