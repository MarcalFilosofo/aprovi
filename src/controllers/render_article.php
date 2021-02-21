<?php

$article = Article::getOne(['id' => $_GET['aprovi']]);

$path = '/../view/upload';

loadTemplateView('render_article',['article' => $article, 'path' => $path]);