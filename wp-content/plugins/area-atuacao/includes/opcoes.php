<?php
function aa_pagina_opcoes_frontend(){
    echo '<h1>Áreas de Atuação</h1>';

    require_once(AA_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/templates/op.php');
}

function aa_pagina_opcoes_registro(){
    add_options_page('Áreas de Atuação', 'Áreas de Atuação', 'manage_options', 'Atuação', 'aa_pagina_opcoes_frontend');
}

add_action('admin_menu', 'aa_pagina_opcoes_registro');

function aa_carregando_settings_api(){
    register_setting( 'aa_op', 'aa_op_areas');
}

add_action('admin_init', 'aa_carregando_settings_api');