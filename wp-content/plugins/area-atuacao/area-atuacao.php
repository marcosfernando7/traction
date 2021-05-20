<?php

/*
Plugin Name: Áreas de atuação
Description: Plugin que exibi as áreas de atuação
Version: 1.0
Author: Marcos Fernando
*/

// Medidas de segurança
if(!defined('ABSPATH')){
    exit("Acesso Negado");
}

define('AA_DIRETORIO_ABSOLUTO_DO_PLUGIN', plugin_dir_path(__FILE__));

// Includes
require_once(AA_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/conteudo.php');
require_once(AA_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/opcoes.php');