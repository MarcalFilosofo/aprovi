<?php
class User extends Model {
    protected static $tableName = 'users';
    protected static $columns = [
        'id',
        'nome',
        'senha',
        'email',
        'is_admin',
        'cidade',
        'empresa',
        'cpf',
        'termo'
    ];

    

    public static function getActiveUsersCount() {
        return static::getCount(['raw' => 'end_date IS NULL']);
    }

    public function insert() {
        $this->validate();
        $this->is_admin = 0;
        $this->senha = password_hash($this->senha, PASSWORD_DEFAULT);
        // echo $this->senha;
       
        return parent::insert();
    }

    public function update() {
        $this->validate();
        $this->is_admin = $this->is_admin ? 1 : 0;
        if(!$this->end_date) $this->end_date = null;
        $this->senha = password_hash($this->senha, PASSWORD_DEFAULT);
        return parent::update();
    }

    private function validate() {
        $errors = [];
        $validEnterprise = [1, 2, 3, 4, 5];
        $user = User::getOne(['email' => $this->email]);
        $usercpf = User::getOne(['cpf' => $this->cpf]);
        

        if(!$this->nome) {
            $errors['nome'] = 'Nome é um campo abrigatório.';
        }
        
        if(!$this->empresa) {
            $errors['empresa'] = 'Empresa é um campo abrigatório.';
        }elseif(!in_array($this->empresa, $validEnterprise)){
            $errors['empresa'] = 'Empresa é um campo abrigatório.';
        }

        if(!$this->email) {
            $errors['email'] = 'Email é um campo abrigatório.';
        } elseif(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email inválido.';
        }elseif($user->email == $this->email){
            $errors['email'] = 'E-mail já cadastrado';
        }


        if(!$this->senha) {
            $errors['senha'] = 'Senha é um campo abrigatório.';
        }elseif((strlen($this->senha) < 8)){
            $errors['senha'] = 'A senha deve ter no mínimo 8 caracteres';
        }elseif(strlen($this->senha) > 16){
            $errors['senha'] = 'A senha deve ter no máximo 16 caracteres';
        }

        if(!$this->senhaConfirme) {
            // $this->senha = md5($this->senha);
            $errors['senhaConfirme'] = 'Confirmação de Senha é um campo abrigatório.';
        }

        if($this->senha && $this->senhaConfirme 
            && $this->senha !== $this->senhaConfirme) {

            $errors['senha'] = 'As senhas não são iguais.';
            $errors['senhaConfirme'] = 'As senhas não são iguais.';
        }

        if(!$this->cpf) {
            $errors['cpf'] = 'CPF é um campo obrigatório.';
        }elseif(!validadeCPF($this->cpf)){
            $errors['cpf'] = 'CPF não é válido.';
        }elseif($usercpf->cpf == $this->cpf ) {
            $errors['cpf'] = 'CPF já cadastrado';
        }

        if(!$this->cidade) {
            $errors['cidade'] = 'Cidade é um campo obrigatório.';
        }

        if(!$this->termo) {
            $errors['termo'] = 'É obrigatório aceitar os termos para se cadastrar na APROVI';
        }

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }
}