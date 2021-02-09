<?php
    include(TEMPLATE_PATH . "/messages.php");

?>

<form class="m-5" action="#" method="post">
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input name="email" type="email" 
            class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>"
            id="inputEmail4" placeholder="Digite seu e-mail">
            <div class="invalid-feedback">
                <?= $errors['email'] ?>
            </div>
    </div>
    <div class="form-group col-md-6">
        <label for="nome">Nome completo</label>
        <input name="nome" type="nome" class="form-control <?= $errors['nome'] ? 'is-invalid' : '' ?>" id="nome" placeholder="Digite seu nome"> 
    </div>
    <div class="invalid-feedback">
        <?= $errors['nome'] ?>
    </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Empresa</label>
        <select name="empresa" class="form-select <?= $errors['empresa'] ? 'is-invalid' : '' ?>" aria-label="Default select example">
            <option selected>Escolha sua empresa</option>
            <option value="1">Brasfort</option>
            <option value="2">Global</option>
            <option value="3">Ipanema</option>
            <option value="4">Multiserv</option>
            <option value="5">Outra</option>
        </select>
        <div class="invalid-feedback">
            <?= $errors['empresa'] ?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputSenha">senha</label>
            <input name="senha" type="password" 
                class="form-control <?= $errors['senha'] ? 'is-invalid' : '' ?>"
                id="inputSenha" placeholder="Digite sua senha">
            <div class="invalid-feedback">
                <?= $errors['senha'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputSenhaConfirmar">Confirme a senha</label>
            <input name="senhaConfirme" type="password" 
                class="form-control <?= $errors['senhaConfirme'] ? 'is-invalid' : '' ?>"
                id="inputSenhaConfirmar" placeholder="Confirme sua senha">
            <div class="invalid-feedback">
                <?= $errors['senhaConfirme'] ?>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="cpf">CPF</label>
            <input name="cpf" type="number" class="form-control <?= $errors['cpf'] ? 'is-invalid' : '' ?>" id="cpf" placeholder="Digite seu CPF" pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})">
            <div class="invalid-feedback">
                <?= $errors['cpf'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input name="cidade" type="text" class="form-control <?= $errors['cidade'] ? 'is-invalid' : '' ?>" id="inputCity" placeholder="Digite sua cidade">
        </div>
        <div class="invalid-feedback">
            <?= $errors['cidade'] ?>
        </div>

        </div>
        <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" name="termo" value="termo">
            <label class="form-check-label <?= $errors['termo'] ? 'is-invalid' : '' ?>" for="gridCheck" >
            Concordo em compartilhar meus dados com a APROVI
            </label>
            <br><small>Respeitaremos sua privacidade e não comportilharemos eles e não usaremos seus dados fora de contexto</small>
        </div>
        <div class="invalid-feedback">
            <?= $errors['termo'] ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <button type="reset" class="btn btn-danger">Cancelar</button>
</form>