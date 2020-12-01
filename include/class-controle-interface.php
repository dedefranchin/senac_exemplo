<?php

class Controle_Interface{
    const SECAO_HOME = 'HOME';
    const SECAO_LISTA = 'Lista';

    public static function exibir_cabecalho(string $titulo, string $secao){
       $template = new raelgc\view\Template(__DIR__. '/../partial/cabecalho.html');
       $template->TITULO = $titulo;
       $template ->SELECIONADO_HOME = ($secao === self::SECAO_HOME) ? 'selecionado' : '';
       $template ->SELECIONADO_LISTA = ($secao === self::SECAO_LISTA) ? 'selecionado' : '';
       $template ->show();

    }
}
