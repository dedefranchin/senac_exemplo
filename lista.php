<?php
    require_once __DIR__ . '/include/autoload.php';
    use raelgc\view\Template;

    $secao = "Lista";
    $titulo = "Lista";
    Controle_Auth::controla_aceso();
    $template = new Template(__DIR__ .'/partial/lista.html');

    try{
        $pdo = new PDO($dsn, $db_username, $db_senha);
        $sql = "SELECT * FROM produto";
        $resultado = $pdo->query($sql);
        if($resultado ===FALSE){
            return FALSE; //erro mysql
        }
        
        while($produtos = $resultado->fetchObject() ){
            $template->PRODUTO_ID = $produtos->id;
            $template->PRODUTO_NOME = $produtos->nome;
            $template -> block('BLOCK_PRODUTO');
        }
        
    }catch(PDOException $e) {
        return false; // erro conexao
    }
    
    $principal = $template->parse();
    Controle_Interface::exibir_pagina($secao,$titulo, $principal);
?>
  
  
</body>
</html>
