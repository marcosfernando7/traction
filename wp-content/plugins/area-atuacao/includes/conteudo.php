<?php

function aa_plugin_registra_area_atuacao($post){
    echo $post;
    require_once(AA_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/templates/conteudo.php');
}

add_filter('the_content', 'aa_plugin_registra_area_atuacao');