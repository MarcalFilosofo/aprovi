<?php

// SELECT * from article where id > ((SELECT MAX(id) FROM article) - 10) ORDER BY id DESC
$article = Article::getLastet();

loadTemplateView('article_list',['article' => $article]);