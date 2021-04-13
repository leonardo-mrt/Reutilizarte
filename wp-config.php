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
define( 'DB_NAME', 'wp_db_reutilizarte' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wp_dp_reutilizarte' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'PbQM2sOqzfw2tlZnç' );

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
define( 'AUTH_KEY',         'p~<$p7]izU!xp%%0-yf&{X-k(Mx:UUT&9Q2<BT{b>p?Za3[d9#u%@M`Vo;Aa K|I' );
define( 'SECURE_AUTH_KEY',  'Ia[4>30v~L,(.4,/7-3KF}:*/U`]K}t})5,,L#{E)ILAO~M0~$2i)l0c-S7,?`z`' );
define( 'LOGGED_IN_KEY',    'Xc=gG#,EEF5dM/%xL._`Vd]wRJEP+S97QGm2OU/RHcNI/lJ1m1Unzg5zC]22zCEs' );
define( 'NONCE_KEY',        'vx?*2UTd%PRcwE)8Z@?Hq2{EAAG51*q`_=FKd{1!#0z/s=7*ckwe+23q(LEdgoJI' );
define( 'AUTH_SALT',        'O`=*WXaDjwy$$>-p^|q B1[H&__[h#,o]{(6Qotapo}O6KAte][}4@{(u&B[.?sv' );
define( 'SECURE_AUTH_SALT', 'WEKJ@3}<P@F^qcHB98Ue3iA_:=GpX?+W4V[VTT:wJY4Do7`&v`oip^h$*bT.qW!T' );
define( 'LOGGED_IN_SALT',   'YxELs{)HT2zj)=Yo$dF62pU!j~iL=[^iCNP|oxD.#JoP8l4~)aw&cK45lI;:~>cX' );
define( 'NONCE_SALT',       '`P<<9~WABPYQd2_Vm}Qp.s@M&cqK>`n,RNXw8,?Ydb]M%)vWCh[QzB1:C]el$(-Y' );

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
