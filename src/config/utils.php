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