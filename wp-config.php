<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'expert' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S+3&f8vmpq]%+lcWZ>u!>Pt !fd9h2vo;9fu% 9y|5#sP00Rnq`^H@rJ(gJMRaO8' );
define( 'SECURE_AUTH_KEY',  's&+nSG7YNoX./M)={iCtIU<asMuM}7|[u(Y_OAn5V=?rW@2j8Wax]8qhLeA|${(V' );
define( 'LOGGED_IN_KEY',    '5adSLzhA`BTcm k S?iOxdzAL]TeN?V,E-dcvKCU7;rq-DU`n&FIP*@l?-U/mYHf' );
define( 'NONCE_KEY',        '**-,D4:R0+rq,3Y)tp~[/N}/,^OXRxLY]_8s {+`S][#^I?YX1>mInHWo@j7,j&w' );
define( 'AUTH_SALT',        'u!Y_H)!W,@DGYpyXJTiFAEMAOkoT_~lZ4!NN?_D-lGt0 j;^h)=m2nV}zR*qyffN' );
define( 'SECURE_AUTH_SALT', 'UZq58xY0z?cn3AP()y]07fReqv_@)?hH6{Ux5o?f/t9cy?}s=YDeBlH53+nBI(k ' );
define( 'LOGGED_IN_SALT',   'Uhp0}IDEp+YW>ko**z)m%Wd,?L!wv/4^{h2=4D7)5:Zg2tW*UEzH?&?y4pTKIGw:' );
define( 'NONCE_SALT',       'B9WS&zm|1;zkub;P#)rp(Spz-gk|G5uncf.wn,4p~,MI852v/l$h(1VFCG{L4Y{q' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
