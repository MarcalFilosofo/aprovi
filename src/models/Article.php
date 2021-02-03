<?php

class Article{
    public $nome;

    function __construct (){
        echo getNome();
    }

    function getNome(){
        return $this->nome;
    }
}