<?php
function loadModel($modelName) {
    require_once(MODEL_PATH . "/{$modelName}.php");
}


function loadView($viewName, $params = array()) {

    if(count($params) > 0) {
        foreach($params as $key => $value) {
            if(strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }

    require_once(VIEW_PATH . "/{$viewName}.php");
}

function loadTemplateView($viewName, $params = array()) {

    if(count($params) > 0) {
        foreach($params as $key => $value) {
            if(strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }

    require_once(TEMPLATE_PATH . "/header.php");
    require_once(TEMPLATE_PATH . "/left.php");
    require_once(VIEW_PATH . "/{$viewName}.php");
    require_once(TEMPLATE_PATH . "/footer.php");
}

function renderTitle($title, $subtitle, $icon = null) {
    require_once(TEMPLATE_PATH . "/title.php");
}

function renderArticle($article_title, $description, $img_path) {
    ?>

        <div class="card col-8 col-md-3 mx-auto my-4" style="width: 18rem;">
            <img class="card-img-top" src="<?= $img_path?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $article_title?></h5>
                <p class="card-text"><?= $description?></p>
                <a href="#" class="btn btn-primary">Ver artigo</a>
            </div>
        </div>

    <?php
}