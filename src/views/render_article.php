<?php
    // var_dump($article);
?>

<img src="assets/img/upload/<?= $article->img_path ? $article->img_path : 'default.jpg'?>" class="img-render-article" alt="">
<article class="article-view m-5">
    <h1><?= $article->title ?></h1>
    <h2><?= $article->subtitle ?></h2>
    <p><?= $article->conteudo ?></p>
</article>