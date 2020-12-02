<?php
    require_once __DIR__ . '/include/autoload.php';
    $secao = "Lista";
    $titulo = "Lista";
    Controle_Auth::controla_aceso();
    Controle_Interface::exibir_pagina($secao,$titulo, '<li> <a href="detalhe.php?id=1">  Lista 1 </a></li>');
    
?>
  
  
</body>
</html>
