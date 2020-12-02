<?php
    
    require_once __DIR__ . '/include/autoload.php';
    
    Controle_Auth::controla_aceso();
    
    Controle_Interface::exibir_pagina('Home',Controle_Interface::SECAO_HOME, '<h1> Principal </h1>');
    


?>
   