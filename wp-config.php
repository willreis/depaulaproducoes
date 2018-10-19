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
define('DB_NAME', 'depaula');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '/3/B;ly$E=,+g3r;p,/l%mmZrd%zcJp#%l6RmHZfj) ,n*Jqy;LUZ%CU{3.~9xzB');
define('SECURE_AUTH_KEY',  'Q.n|q6~Vlmd0zzUk}frjaaS8SxuWjCCdM85Po4<HfZgVG7ngtC)_o_E02b,a!GZm');
define('LOGGED_IN_KEY',    '$sC>Iyf}oPUMj[~Mr @GTNzzYx`$C4b*!$<io.!&,}LhNs H94jc{^_e}#&:EN(L');
define('NONCE_KEY',        '|#CswoDqq8HI7Z,Ljc!xdWn8:-@C~45Z0a5`gkuxdDtM{u8aN#m:$jco_k I#6^w');
define('AUTH_SALT',        'r>SD=uzzPYl<%%0T~NH|C4@St5peTWRn,aRy2=#$f]jaC);~dtw^j $<w$VQL%m$');
define('SECURE_AUTH_SALT', 'J^b%D/0[.]S..`4Sj53{yjt#=#|uS]8rXLMX[fwOd*BYx-h#ur-Dnl 0u*&(8[<Q');
define('LOGGED_IN_SALT',   'TyDfe5ckdc4edc%zhv{U{KaaVKY{~2PJ+E=7LT)x@NAW+;&X)eq}[Rd?0b*)Kk@D');
define('NONCE_SALT',       'Yk2w9jKlB{fd{!1Jpb5dtzisIogGxqK0p1+}rRWJ.$ hGFe!s ^I7p73+d_k*w|8');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
