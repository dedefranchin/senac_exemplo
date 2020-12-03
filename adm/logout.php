<?php

/*
*Faz logout do usuario atual
*Redireciona para a pagina inicial apos o logout
*/
require_once __DIR__ . '\..\include\autoload.php';
    session_start();
    unset($_SESSION['usuario']);
    header('Location: index.php');