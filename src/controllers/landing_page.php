<?php
    $article = Article::getLastet();


    loadTemplateView('landing_page',['article' => $article]);