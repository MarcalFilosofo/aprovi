<main class="main p-5">
<?php
    include(TEMPLATE_PATH . "/messages.php");

?>
<h1>Publicar</h1>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="form">
        <div class="form-group">
            <label for="title">Título</label>
            <input name="title" type="text" class="form-control  
                <?= $errors['title'] ? 'is-invalid' : '' ?>" 
                id="title" placeholder="Título..."
                value="<?=$title?>">
            <div class="invalid-feedback">
                <?= $errors['title'] ?>
            </div>
        </div>
        
        <div class="form-group">
            <label for="subtitle">Subtítulo</label>
            <input name="subtitle" type="text" class="form-control 
                <?= $errors['subtitle'] ? 'is-invalid' : '' ?>" 
                id="subtitle" placeholder="Subtítulo..."
                value="<?=$subtitle?>">
            <div class="invalid-feedback">
                <?= $errors['subtitle'] ?>
            </div>
        </div>

        <div class="custom-file">
            <input name="file" type="file" class="custom-file-input 
                <?= $errors['file'] ? 'is-invalid' : '' ?>" 
                id="file" placeholder="Faça upload de um arquivo de imagem">
            <label class="custom-file-label" for="file">Arquivo de imagem</label>
            <div class="invalid-feedback">
                <?= $errors['file'] ?>
            </div>
        </div>


        <div class="form-group mt-5">
            <label for="contentTitle">Início</label>
            <textarea name="conteudo" class="form-control 
            <?= $errors['conteudo'] ? 'is-invalid' : '' ?>" 
            id="contentTitle" rows="10"
            value=""><?=$conteudo?></textarea>
            <div class="invalid-feedback">
                <?= $errors['conteudo'] ?>
            </div>
        </div>
        <div class="form-group mt-5">
            <label for="contentTitle">Desenvolvimento</label>
            <textarea name="desen" class="form-control 
            <?= $errors['desen'] ? 'is-invalid' : '' ?>" 
            id="contentTitle" rows="10"
            value=""><?=$desen?></textarea>
            <div class="invalid-feedback">
                <?= $errors['desen'] ?>
            </div>
        </div>
        <div class="form-group mt-5">
            <label for="contentTitle">Conclusão</label>
            <textarea name="conclusion" class="form-control 
            <?= $errors['conclusion'] ? 'is-invalid' : '' ?>" 
            id="contentTitle" rows="10"
            value=""><?=$conclusion?></textarea>
            <div class="invalid-feedback">
                <?= $errors['conclusion'] ?>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Publicar</button>
        <button type="reset" class="btn btn-primary">Resetar</button>
    </div>
</form>     
</main>