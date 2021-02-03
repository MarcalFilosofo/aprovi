<?php

$exception = null;
$userData = [];

// echo 1;
if(count($_POST) === 0 && isset($_GET['update'])) {
    // echo 2;
    $user = User::getOne(['id' => $_GET['update']]);
    $userData = $user->getValues();
    $userData['password'] = null;
} elseif(count($_POST) > 0) {
    // echo 3;
    try {
        // echo 4;
        $dbUser = new User($_POST);
        if($dbUser->id) {
            // echo 5;
            $dbUser->update();
            addSuccessMsg('Usuário alterado com sucesso!');
            header('Location: users.php');
            exit();
        } else {
            // echo 6;
            $dbUser->insert();
            addSuccessMsg('Usuário cadastrado com sucesso!');
        }
        
        // echo 7;
    } catch(Exception $e) {
        $exception = $e;
        // echo 8;
        // echo $e;
    } finally {
        $userData = $_POST;
        // echo 9;
       
        
        $_POST = [];
    }
}


loadTemplateView('cadastro', $userData + ['exception' => $exception]);