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
                    <h1 id="texto1" style="margin-top: 2%;  ">Novo Usuario</h1>                
                </div>
            </div>     
            
            <div class="row"  > 
                    <div class="col-md-12">
                        <label>Nome Do Usuario</label>
                        <input type="text" class="form-control" placeholder="Nome Do Usuario" name="nome">
                    </div>
            </div> 
            <div class="row"  > 
                    <div class="col-md-4">
                        <label>CPF</label>
                        <input type="number" class="form-control" placeholder="Informe seu CPF" name="cpf">
                    </div>
                    <div class="col-md-4">
                        <label>Endereço</label>
                        <input type="text" class="form-control" placeholder="Informe seu Endereço" name="endereco">
                    </div>
                    <div class="col-md-2">
                        <label>Nível</label>
                            <select class="form-select" name="nivel">
                            <option value>Nível</option>
                            <option value="Novato">Novato</option>
                            <option value="Veterano">Veterano</option>
                        </select>
                    </div>
            </div>
            <div class="row"> 
                    <div class="col-md-4">
                         <label>Email</label>
                        <input type="email" class="form-control" placeholder="Informe seu Email" name="email">
                    </div>
                    <div class="col-md-4">
                          <label>Senha</label>
                        <input type="text" class="form-control" placeholder="informe sua Senha" name="senha">  
                    </div>
                    <div class="col-md-4">
                        <label>Status</label>
                            <select class="form-select" name="status">
                            <option value="">Status</option>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                        </select>
                    </div>
                    
            </div>
        <div class="row" style="margin-left: 67%;margin-top: 1%;">
                <div class="col-md-12">
                    <button type="submit" name="enviar" >Enviar</button>
                     <button type="submit"  style="width: 20%;" name="cancelar" >Cancelar</button>
                </div>
                

                
              
                
        </div>
       </form>
    </div>










 
</body>
</html>
<script src="funcao.php"></script>