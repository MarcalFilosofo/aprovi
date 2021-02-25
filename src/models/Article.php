<?php
class Article extends Model{
    protected static $tableName = 'article';
    protected static $columns = [
        'id',
        'title',
        'subtitle',
        'conteudo',
        'desen',
        'conclusion',
        'img_path'
    ];


    public static function getLastet($start = 0){
        // SELECT * from article where id > ((SELECT MAX(id) FROM article) - 10) ORDER BY id DESC
        $result = Database::getResultFromQuery("
            SELECT * from article ORDER BY id desc
            
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
        }elseif(strlen($this->title) > 50){
            $errors['title'] = "O título do artigo passou do tamanho máximo";
        }
        if(!$this->subtitle){
            $errors['subtitle'] = "Subtítulo é um campo obrigatório";
        }elseif(strlen($this->subtitle) > 100){
            $errors['subtitle'] = "O subtitulo do artigo passou do tamanho máximo";
        }
        if(!$this->conteudo){
            $errors['conteudo'] = "Escrever o artigo é obrigatório";
        }elseif(strlen($this->conteudo) > 999){
            $errors['conteudo'] = "O artigo passou do tamanho máximo";
        }
    
        // var_dump($_FILES);

        if($_FILES['file']){
            $validExtension = array('png', 'jpg', 'jpeg');
            $extensao = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            if(in_array($extensao, $validExtension)){
                $pasta = "assets/img/upload/";
                $temporario = $_FILES['file']['tmp_name'];
                $novoNome = uniqid().".$extensao";
                if(move_uploaded_file($temporario, $pasta.$novoNome)){
                    $this->img_path = $novoNome;
                }else{
                    $errors['file'] = "ERRO, não foi possivel fazer upload";
                }
            }else{
                $errors['file'] = "Formato inválido";
            }
        }else{
            $errors['file'] = "Escolha um arquivo para fazer upload";
        }
       

        if(count($errors) > 0) {
    
            throw new ValidationException($errors);
        }
    }
}