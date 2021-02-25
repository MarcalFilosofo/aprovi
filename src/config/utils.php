<?php

function addSuccessMsg($msg) {
    $_SESSION['message'] = [
        'type' => 'success',
        'message' => $msg
    ];
}

function addErrorMsg($msg) {
    $_SESSION['message'] = [
        'type' => 'error',
        'message' => $msg
    ];
}

function getEnterprise($e){
    $enterprise = [
        1 => 'Brasfort',
        2 => 'Global',
        3 => 'Ipanema',
        4 => 'Multserv',
        5 => 'Outra',
    ];
    return $enterprise[$e];
}

function validateCPF($cpf){
 
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        
    if (strlen($cpf) != 11) {
        return false;
    }

    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;

}

function isAdmin($admin){
    if($admin === "1"){
        return true;
    }else{
        header('Location: profile.php');
        exit();
    }
}