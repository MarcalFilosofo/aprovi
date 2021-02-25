<?php
    // var_dump($article);
?>

<img src="assets/img/upload/<?= $article->img_path ? $article->img_path : 'default.jpg'?>" class="img-render-article d-none d-lg-block" alt="">
<article class="article-view m-5">
    <div class="container-fluid">
        <div class="row">
            <h1><?= $article->title ?></h1>
            <h2><?= $article->subtitle ?></h2>
            <p class="article-paragraph"><?= $article->conteudo ?></p>
            <p class="article-paragraph"><?= $article->desen ?></p>
            <p class="article-paragraph"><?= $article->conclusion ?></p>
        </div>
    </div>
</article>