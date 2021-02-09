<?php
class Login extends Model {

    public function validate() {
        $errors = [];
        echo 1;
        if(!$this->email) {
            echo 2;
            $errors['email'] = 'E-mail é um campo obrigatório.';
        }

        if(!$this->password) {
            echo 3;
            $errors['senha'] = 'Por favor, informe a senha.';
        }

        if(count($errors) > 0) {
            echo 4;
            throw new ValidationException($errors);
        }
    }

    public function checkLogin() {
        echo 5;
        $this->validate();
        $user = User::getOne(['email' => $this->email]);
        // var_dump($user);
        if($user) {
            echo 6;
            if($user->end_date) {
                throw new AppException('Usuário está desligado da empresa.');
            }
            echo $this->password, "<br>";
            echo $this->senha, "<br>";
            echo $user->password, "<br>";
            echo $user->senha;
            if(password_verify($this->password, $user->senha)) {
                echo 7;
                return $user;
            }
        }
        throw new AppException('Usuário e Senha inválidos.');
    }
}