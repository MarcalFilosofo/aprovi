<main class="main p-5">
<?php
    include(TEMPLATE_PATH . "/messages.php");

?>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="form">
        <div class="form-group">
            <label for="title">Título</label>
            <input name="title" type="text" class="form-control  <?= $errors['title'] ? 'is-invalid' : '' ?>" id="title" placeholder="Título...">
            <div class="invalid-feedback">
                <?= $errors['title'] ?>
            </div>
        </div>
        <div class="form-group">
            <label for="subtitle">Subtítulo</label>
            <input name="subtitle" type="text" class="form-control <?= $errors['subtitle'] ? 'is-invalid' : '' ?>" id="subtitle" placeholder="Subtítulo...">
            <div class="invalid-feedback">
                <?= $errors['subtitle'] ?>
            </div>
        </div>
        <div class="custom-file">
            <input name="img" type="file" class="custom-file-input <?= $errors['img'] ? 'is-invalid' : '' ?> " id="customFile">
            <label class="custom-file-label" for="customFile">Escolha uma foto</label>
            <div class="invalid-feedback mb-5">
                <?= $errors['img'] ?>
            </div>
        </div>
        <div class="form-group mt-5">
            <label for="contentTitle">Conteúdo</label>
            <textarea name="conteudo" class="form-control <?= $errors['conteudo'] ? 'is-invalid' : '' ?>" id="contentTitle" rows="10"></textarea>
            <div class="invalid-feedback">
                <?= $errors['conteudo'] ?>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Publicar</button>
        <button type="reset" class="btn btn-primary">Resetar</button>
    </div>
</form>     
</main>