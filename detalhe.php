<?php
    require_once __DIR__ . '/include/autoload.php';
    use raelgc\view\Template;


    Controle_Auth::controla_aceso();
    $id = $_GET['id'];
    if($_GET['id'] == ''){
        echo "GET veio vazio";
        exit(0);
    }  
    
    $id = $_GET['id'];
    $template = new Template(__DIR__ .'/partial/detalhe.html');
    try{
        $pdo = new PDO($dsn, $db_username, $db_senha);
        $sql = "SELECT * FROM produto where id = $id";
        $resultado = $pdo->query($sql);
        if($resultado ===FALSE){
            return FALSE; //erro mysql
        }   
    }catch(PDOException $e) {
        echo "Erro na execucao da query";
        exit(0); // erro conexao
    }
    $produtos = $resultado->fetchObject();
    $template->NOME = $produtos->nome;
    $template->PRECO = $produtos->preco_centavos/100;
    $template->DESCRICAO = $produtos->descricao;
    $principal = $template->parse();
    Controle_Interface::exibir_pagina('Detalhes','Lista', $principal);
    
    
    

?>