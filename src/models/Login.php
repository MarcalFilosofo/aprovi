<?php
class Login extends Model {

    public function validate() {
        $errors = [];
      
        if(!$this->email) {
            $errors['email'] = 'E-mail é um campo obrigatório.';
        }

        if(!$this->senha) {
            $errors['senha'] = 'Por favor, informe a senha.';
        }

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }

    public function checkLogin() {

        $this->validate();
        $user = User::getOne(['email' => $this->email]);
        // var_dump($user);
        if($user) {
     
            if($user->end_date) {
                throw new AppException('Usuário está desligado da empresa.');
            }

            if(password_verify($this->senha, $user->senha)) {
           
                return $user;
            }
        }
        throw new AppException('Usuário e Senha inválidos.');
    }
}