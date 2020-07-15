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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'meublog' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'iwebwork' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '06101218iwebwork' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql873.umbler.com:41890' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'W>&`Ig9<Z^Wx|#:$sbX?n1?6z&+k#ai%aUR6:_c}cuW0e~0H.F$0^gMk=;]|G$CQ' );
define( 'SECURE_AUTH_KEY',  '|e<+fP/+^d2t;?J9i#8<78$ae;)ESBrMjYIoM#9~I+a)UQ@la7@LW5{%;Fb(Oa[{' );
define( 'LOGGED_IN_KEY',    '+%AoWPDD]Y}1k*hWNcys:T66N7~9 dCw:+EG.=5PUp:{}3vf1=*DG{U>+-JlVDUB' );
define( 'NONCE_KEY',        '%xn~8on%VE)%`9:|Y1Q/hklw6O+qBIg(XS5?]QOPzh2Wiz7@JYNiGklSTe94*A&m' );
define( 'AUTH_SALT',        'iJn$gP^:LzAy>w!GE`:kJ~JH2H5AF43*//ro_alXho1^3f7t`$E<0W-xx@[3,/=^' );
define( 'SECURE_AUTH_SALT', 'Ei&.kCxnWYBLcIx.mGHjiLc159FQ{Hw8(1l1kLH^SdI{iV>MH_1Ha]GpSt[F4gHc' );
define( 'LOGGED_IN_SALT',   'U;=D_abreu3`IL,LMy&xlV4CT+|E-Wk29Rx@!hYF$)~MEc9Mqi+^EP`@Bd~%C;oB' );
define( 'NONCE_SALT',       '2Gvtjw|dWHJcnfFU5&4200:V=D0&w!2{CT1T<ONIojIs2jN{&GK7/:C=qw(7>_&S' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
