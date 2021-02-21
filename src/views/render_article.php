<?php
    // var_dump($article);
?>

<article class="article-view m-5">
    <img src="assets/img/upload/<?= $article->img_path ? $article->img_path : 'default.jpg'?>" class="img-render-article mx-5 mb-5 px-5 py-2" alt="">
    <h1><?= $article->title ?></h1>
    <h2><?= $article->subtitle ?></h2>
    <p><?= $article->conteudo ?></p>
</article>