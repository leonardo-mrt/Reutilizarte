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
define( 'DB_NAME', 'reutilizarte_wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'leo_admin_wp' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'YYfDu34ldZZhpYRc' );

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
define( 'AUTH_KEY',         'JzaheEU8x)R* 3r2n7fPgI(-?8>,fN!~a.CVVAY73UR~wGsLK-A%W)093@eodc:]' );
define( 'SECURE_AUTH_KEY',  '3*r@JXaA12g*&i BKPGnNWQS).4s]xSm&E=x=3^1L-9Cc#xowVHB]VRIrAqu^kSU' );
define( 'LOGGED_IN_KEY',    '^_lTygs[z3Jy0/Z~#L_>2R<2/c<)#o;@W/C]HSi1YTv=SFLB;akzF-Fx8FKBwc`L' );
define( 'NONCE_KEY',        'tJN4SsS.QKxc`%a4gB6*l^h&zacJCt~tnYl<VxuQbFn~{y|]dT_JfpkZ!oL+]4j$' );
define( 'AUTH_SALT',        'A~v~brP),^s+>1sw)bv;tp!OdkeVlDfaz(GgTsT`|+@RrtU,pI[|V>6GFtSwN~UM' );
define( 'SECURE_AUTH_SALT', 'W>HjkgG}|:PU>*?a/0?*3dP/R:JsUP<lg2[`|ohqKANB-JfD>gl;*TsvM>yfVrF9' );
define( 'LOGGED_IN_SALT',   'xSQfwVO1p:!de^o[A>6)t{L&>j8(re*=B9cyp9^nSzh4|mISdn3T*psi8^:ffSD+' );
define( 'NONCE_SALT',       '`yJ-2@#7&nS6&G4`COo]_i.rRad&`lzGVr(qY)X.mg{wiqS(BJf=DhbAEvjD]e7&' );

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
