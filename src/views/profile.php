<main class="main">
    <div class="profile">
        <div class="profile-header">
            Você é um associado da APROVI <span>

                <i class="icofont-heart text-danger mx-1"></i>
            </span>
        </div>
        <div class="profile-main">
            <div class="profile-item">Nome: <?= $_SESSION['user']->nome ?></div>
            <div class="profile-item">Cidade: <?= $_SESSION['user']->cidade ?></div>
            <div class="profile-item">CPF: <?= $_SESSION['user']->cpf ?></div>
            <div class="profile-item">Empresa: <?= getEnterprise($_SESSION['user']->empresa) ?></div>
            <div class="profile-item">Telefone: <?= $_SESSION['user']->telefone ?></div>
        </div>
        <div class="profile-footer">
            
        </div>
    </div>
   
</main>