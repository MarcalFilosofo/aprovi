<?php
session_start();
requireValidSession();

// var_dump($users);
// $user = User::getOne(['email' => ]);
// var_dump($_SESSION['user']);
// $empresa = $_SESSION['empresa'];
// $is_admin = $_SESSION['is_admin'];
// $email = $_SESSION['email'];
// $telefone = $_SESSION['telefone'];

loadProfileView('profile', [
  
]);
