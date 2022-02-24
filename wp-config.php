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
define( 'DB_NAME', 's3_rest-api' );

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

define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         ')pj}q%G:y:<J@u{4iRS?27s/pP[F >[7Jrjy@:hT^{ Vw|DTmu100xEi2`$ZRd3)' );
define( 'SECURE_AUTH_KEY',  'Y}[cSlk28-m${[Z@0>+e|r51kVm|NB[):rF6%Ev}TyXv#+5b9HDX?(P0D2RQ|~qE' );
define( 'LOGGED_IN_KEY',    '~+~uwa{OEbm^ {U90{PK&+L]FlD+8raly zr|f9Qu[eZr_3@g<}~#4dGL;2 H;#u' );
define( 'NONCE_KEY',        '_ [;L{c0?fo;7LxY1~_O`da D|GWQ+1lc[Aw&+mRw|Y.?YvY)%$&IX6gkxLKqYq ' );
define( 'AUTH_SALT',        'cNvyqu4K*zWRx/tN?6n=,R9DnDRJ=w!]7UUX)P8X[i:c8vmyp/4z$[agn(pc@@Ll' );
define( 'SECURE_AUTH_SALT', ')?c@6=UP;=WBZVP[yDo,dWr.zlT[$H)QnquvE=gv$HB!=QyN0kkmz;$;%</`%@zf' );
define( 'LOGGED_IN_SALT',   'Aq!R:,3&t}()_ /A+|:*ls4{WfQR)?y.Av:<n(_<*9LfJ,T%BJV_7$aD9MwKCT2 ' );
define( 'NONCE_SALT',       ';R41O~e^I1DM}4nsT*]rT!a:1)[wX=%. ~6sJ#S!J9vEr,[rv[SfXDpsgX~n] g2' );

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
