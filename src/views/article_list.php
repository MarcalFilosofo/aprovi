<main class="article-list">
    <div class="container-fluid">
        <div class="row">
        <?php foreach($article as $a): ?>
            <div class="card col-8 col-md-3 mx-5 my-4">
                <img class="card-img-top" src='assets/img/upload/<?= $a['img_path'] ? $a['img_path'] : 'default.jpg'?>' alt="Card image cap" height="100px">
                <div class="card-body">
                    <h5 class="card-title"><?= $a['title'] ?></h5>
                    <p class="card-text"><?= $a['subtitle'] ?></p>
                    <a href="render_article.php?aprovi=<?= $a['id'] ?>" class="btn btn-primary">Ver artigo</a>
                </div>
            </div>
        <?php endforeach ?>
        </div>
    </div>
    
    
 
  
</main>