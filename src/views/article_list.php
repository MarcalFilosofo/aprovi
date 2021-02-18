<main class="article-list">
    <div class="container-fluid">
        <div class="row">
        <?php foreach($a as $name): ?>
            <div class="card col-8 col-md-3 mx-5 my-4">
                <img class="card-img-top" src='assets/img/default.jpg' alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $name['title'] ?></h5>
                    <p class="card-text"><?= $name['subtitle'] ?></p>
                    <a href="render_article.php?aprovi=<?= $name['id'] ?>" class="btn btn-primary">Ver artigo</a>
                </div>
            </div>
        <?php endforeach ?>
        </div>
    </div>
    
    
 
  
</main>