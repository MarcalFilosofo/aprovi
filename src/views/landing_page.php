<header class="header">
    <img src="assets/img/wallpaper.jpg"  alt="" class="wallpaper">
</header>
<main class="main">
    <article id="home" class=" my-5">
        <h1 class="title col-12">APROVI</h1>
        <h2 class="subtitle mb-5 col-12">Nossa missão</h2>
        
        <p class='col-12'>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula ac lacus et placerat. Quisque tempus ultrices odio maximus vulputate. Sed quis libero at enim porta blandit ac nec velit. Donec sit amet felis a nibh semper porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus in imperdiet lacus. Duis felis leo, dapibus aliquet venenatis quis, laoreet sit amet nisi. Etiam facilisis magna vel libero facilisis consequat. Suspendisse consectetur orci orci, id semper enim dignissim sed. Quisque pharetra nisi leo, consequat pretium neque semper nec.
        </p>
        <p class='col-12'>
            Quisque fringilla blandit vestibulum. Etiam sed ligula ante. Nulla vel nisl venenatis, bibendum nulla eu, iaculis ex. Cras ut arcu vel leo faucibus porta. Ut non quam libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum laoreet turpis non sapien tempus, eu fermentum sem laoreet. Praesent feugiat arcu ac felis placerat lobortis. Fusce convallis felis nunc, nec laoreet urna pulvinar mattis. Nulla luctus diam mollis tellus accumsan mattis. Suspendisse condimentum urna vitae tortor sagittis fringilla.
        </p>
        <p class='col-12'>
            Pellentesque sapien lorem, consectetur ac euismod eu, dapibus at massa. Duis tellus nisi, fermentum id quam id, lacinia tempus eros. Sed ac varius tellus. Morbi dignissim nisl ut turpis condimentum pretium. Etiam finibus mauris eu nibh mollis condimentum. Nunc aliquet mi massa, et molestie libero gravida a. Etiam vestibulum viverra scelerisque.
        </p>
        
    </article>

    <section id="artigos">
        <div class="container-fluid">
            <div class="row">
                <?php
                    $i = 0;
                    foreach($article as $a){
                        ?>
                        <div class="card col-8 col-md-3 mx-auto my-4" style="width: 18rem;">
                            <img class="card-img-top" src='assets/img/upload/<?= $a['img_path'] ? $a['img_path'] : 'default.jpg'?>' alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $a['title'] ?></h5>
                                <p class="card-text"><?= $a['subtitle'] ?></p>
                                <a href="render_article.php?aprovi=<?= $a['id'] ?>" class="btn btn-primary">Ver artigo</a>
                            </div>
                        </div>
                        <?php
                        $i++;
                        if($i > 2){
                            break;
                        }
                    }
                ?>
            </div>
        </div>
    </section>

    <section id="video">
            <div class="container-fluid p-5 my-5">
                <div class="row">
                    <h2 class="title col-12">Um pouco mais sobre nós</h2>
                </div>
                <div class="row">
                    <span class="description col-12 ml-0 col-lg-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula ac lacus et placerat. Quisque tempus ultrices odio maximus vulputate. Sed quis libero at enim porta blandit ac nec velit. Donec sit amet felis a nibh semper porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus in imperdiet lacus. Duis felis leo, dapibus aliquet venenatis quis, laoreet sit amet nisi. Etiam facilisis magna vel libero facilisis consequat. Suspendisse consectetur orci orci, id semper enim dignissim sed. Quisque pharetra nisi leo, consequat pretium neque semper nec.
                    </span>
                    <div class="embed-responsive embed-responsive-16by9 col-12 ml-0 col-lg-6">
                        <iframe class="video"
                            src="https://www.youtube.com/embed/kqWWgDf1iX0" 
                                frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                            Seu navegador não suporta esse tipo de vídeo, tente atualiza-lo para um mais moderno
                        </iframe>  
                    </div> 
                </div>
                    
                
            </div>
                
                     
                   
           
            
            
    </section>
            

    <section id="parceiros">
        <div id="title-parc">
            <h2 class="subtitle my-4 mx-3">Parceiros</h2>
        </div>
        <div id="items-parc" class="row">
            <span class="parceiro col-6 col-md-3">Parceiro</span>                 
            <span class="parceiro col-6 col-md-3">Parceiro</span>
            <span class="parceiro col-6 col-md-3">Parceiro</span>
            <span class="parceiro col-6 col-md-3">Parceiro</span>
        </div>



        
        
    </section>
    

</main>
