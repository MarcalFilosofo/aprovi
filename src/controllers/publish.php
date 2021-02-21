
<?php
session_start();
requireValidSession();

$exception = null;
$articleData = [];
if(count($_POST) === 0 && isset($_GET['update'])) {
    $article = Article::getOne(['id' => $_GET['update']]);
    $articleData = $article->getValues();
    // $articleData['password'] = null;
} elseif(count($_POST) > 0) {
    try {
        $dbArticle = new Article($_POST);
        if($dbArticle->id) {
            $dbArticle->update();
            addSuccessMsg('Artigo alterado com sucesso!');
            header('Location: publish.php');
            exit();
        } else {
            $dbArticle->insert();
            addSuccessMsg('Artigo publicado com sucesso!');
        }
        $_POST = [];
    } catch(Exception $e) {
        $exception = $e;
    } finally {
        $articleData = $_POST;
    }
}




loadProfileView('publish', $articleData + ['exception' => $exception]);
