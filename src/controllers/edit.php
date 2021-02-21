<?php
session_start();
requireValidSession(true);

$exception = null;


if(isset($_GET['delete'])) {
    try {
        Article::deleteById($_GET['delete']);
        addSuccessMsg('Artigo excluído com sucesso.');
    } catch(Exception $e) {
        $exception = $e;
    }
}


$article = Article::getLastet();
loadProfileView('edit', ['article' => $article]);