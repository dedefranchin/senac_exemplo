<?php
    require_once __DIR__ . '/include/autoload.php';
    $secao = "Lista";
    $titulo = "Lista";
    Controle_Interface::exibir_cabecalho($secao,$titulo);
    controla_aceso();
?>
  
    <ul>
        <li> <a href="detalhe.php?id=1">  Lista 1 </a></li>
        <li> <a href="detalhe.php?id=2">  Lista 2 </a></li>
        <li> <a href="detalhe.php?id=3">  Lista 3 </a></li>
    </ul>
</body>
</html>
