<?php
class Article extends Model{
    protected static $tableName = 'article';
    protected static $columns = [
        'id',
        'title',
        'subtitle',
        'conteudo',

    ];


    public static function getLastet($start = 0){
        // SELECT * from article where id > ((SELECT MAX(id) FROM article) - 10) ORDER BY id DESC
        $result = Database::getResultFromQuery("
            SELECT * from article ORDER BY id desc limit $start,10
            
        ");

        $topArticles = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($topArticles, $row);
            }
        }

        return $topArticles;
    } 

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
    
        if(count($errors) > 0) {
    
            throw new ValidationException($errors);
        }
    }
}