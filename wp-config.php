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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'aplicacaoestagio' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'aHAG8PqN[W<CztX*}?M5Q`q,?&hmsJs&g3Xl_OJ+:rZ]DCt:xXTIO@+F5{[4$^|o' );
define( 'SECURE_AUTH_KEY',  '5+PA#K4_+vn7B&%z=}`0,-$v`F8+@(aO86Tj_wB,W3ilvMJVih$1KNzc#4Ze#&<H' );
define( 'LOGGED_IN_KEY',    'O]e3vyste))^iIb,TBHK4~rtf|vYA~~03YWO<K+) n,$@)b6k_*yLO%G,{2:y]av' );
define( 'NONCE_KEY',        'U3TxeY17#ysD&7}D@MDC4[$wjL8h1qg]idobj15^S^ZTt-^aioNN_]W{m&?Y*!I2' );
define( 'AUTH_SALT',        'D3Y&sS;HkZ nL3C6x6r|#,436m,(0DZ{P*kI`8sZ60?.,$Tr!-^1l~|_).U#/|/,' );
define( 'SECURE_AUTH_SALT', '4*fJaz0&1.T^Y/$xZK}WKTa6>wYB(B{Nc?A0YL/ghh2l`roX]FHn}D|d;#H4aypO' );
define( 'LOGGED_IN_SALT',   '#7A|69v~Mb)Sjr`D:ub/y?}=;%Z{K<p~u:Ho?it<Lmm_)8Qp2[Fc|mJLPXW*F,?Z' );
define( 'NONCE_SALT',       'S/=C2yAyRhg).|ujM]lJYMiU{G-c@^K3mxdxTY|wP/88_4N=lDK2/Jazn%R1U=#z' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
