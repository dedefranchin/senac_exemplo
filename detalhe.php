<?php
    require_once __DIR__ . '/include/autoload.php';
    Controle_Auth::controla_aceso();
    Controle_Interface::exibir_cabecalho("Lista","Lista");

?>