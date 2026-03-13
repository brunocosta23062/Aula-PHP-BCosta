<div>
    
    <ul class="nav nav-tabs nav justify-content-center">
        <div class="nav-item">
            <a class="nav-link active" href="../View/home.php">HOME</a>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="../View/cadastrar.php">Cadastro</a>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="">Informações</a>
        </div>
        <div class="nav-item dropdown">
            <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Dropdown</button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../View/cidade.php">Cidade</a></li>
            <li><a class="dropdown-item" href="../View/estado.php">Estado</a></li>
            <li><a class="dropdown-item" href="../View/pais.php">Pais</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../View/enviar_email.php">E-mail</a></li>
            </ul>
        </div>
        <div class="nav-item">
            <a class="nav-link" onclick="return confirm('Tem certeza que deseja sair?')" href="../Services/sair_action.php">Sair</a>
        </div>
    </ul>
         
</div>