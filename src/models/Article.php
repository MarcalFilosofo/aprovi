<?php
class Article extends Model{
    protected static $tableName = 'article';
    protected static $columns = [
        'id',
        'title',
        'subtitle',
        'conteudo',
        'img'
    ];

    public function insert() {
       
        $this->validate();
        return parent::insert();
    }

    public function update() {

        $this->validate();
        return parent::update();
    }

    private function validate() {
        $errors = [];

        if(!$this->title){

            $errors['title'] = "Título é um campo obrigatório";
        }
        if(!$this->subtitle){

            $errors['subtitle'] = "Subtítulo é um campo obrigatório";
        }
        if(!$this->conteudo){

            $errors['conteudo'] = "Escrever o artigo é obrigatório";
        }
        if(!$_FILES){
            $errors['img'] = "É obrigatório colocar uma imagem";
        }
        if(count($errors) > 0) {
    
            throw new ValidationException($errors);
        }
    }
}