<?php

class Controle_Interface_Adm{
    const SECAO_HOME = 'HOME';
    const SECAO_LISTA = 'Lista';

    public static function exibir_pagina(string $titulo, string $secao, string $principal){
        $template = new raelgc\view\Template(__DIR__. '/../partial/pagina.html');
        $template ->NOME_USUARIO_LOGADO = $_SESSION['usuario']->nome_completo;
        $template->TITULO = $titulo;
        $template ->SELECIONADO_HOME = ($secao === self::SECAO_HOME) ? 'selecionado' : '';
        $template ->SELECIONADO_LISTA = ($secao === self::SECAO_LISTA) ? 'selecionado' : '';

        $template->PRINCIPAL = $principal;
        $template ->show();

    }
}
