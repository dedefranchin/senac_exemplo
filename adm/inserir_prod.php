<?php
require_once __DIR__ .'/../include/autoload.php';
use raelgc\view\Template;
Controle_Auth::controla_aceso(TRUE);

if(isset( $_POST['acao'] )&& ($_POST['acao'] === 'SALVAR') ){
    try{
        $pdo = new PDO($dsn, $db_username, $db_senha);
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco_centavos = $_POST['preco'];
        $sql = "INSERT INTO produto (nome, descricao, preco_centavos) VALUE ('$nome','$descricao', $preco_centavos)";
        $resultado = $pdo->exec($sql);
        
        if($resultado ===FALSE){
            printf("ERRO SQL");
            return FALSE; //erro mysql
        }
        $id= $pdo->lastInsertId();
        header("Location: detalhe.php?id=$id");
        exit(0);
    }catch(PDOException $e) {
        return false; // erro conexao
    }
}

$template = new Template(__DIR__ . '/partial/form.html');
$principal = $template ->parse();

Controle_Interface_Adm::exibir_pagina('Novo Produto', Controle_Interface_Adm::SECAO_LISTA, $principal);             