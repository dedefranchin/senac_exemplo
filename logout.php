<?php

/*
*Faz logout do usuario atual
*Redireciona para a pagina inicial apos o logout
*/
    session_start();
    unset($_SESSION['usuario']);
    header('Location: index.php');