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
define('DB_NAME', 'aniastore');

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
define('AUTH_KEY',         'nr,E-Wn8i>kaG34CGrgKj|`UFT#n[D@!&(IxsQ %P$WnFQ;<2XIU?hZcZZ)@38)#');
define('SECURE_AUTH_KEY',  'm9bpd=)6:Nf^_Re!,F`}3|;iXYpn[wg]Qx40N~?{!*7(dn.%n&2$p_RqU-MBN_}x');
define('LOGGED_IN_KEY',    'Y^bXmO,V8fn uAk#R*B(Mj<HJeJ]9~Hbkp8-=G5fn[V`F:O#?X,U;b&tJjF#7D:p');
define('NONCE_KEY',        'x^#eD$6Hkf`f?7}Bng@Q:a[v`COX@70g0.OFniI%.d*u%DWh=Xb7h^(zZHUQ=OIZ');
define('AUTH_SALT',        'e)k ,pvul_F.O*=I3Ws[~RsB.2|tpi^b<k%lXh2W9nx/FKzG~%JnT#KRc}<XrkI0');
define('SECURE_AUTH_SALT', 'jA*amN6-Zx%g;Ktbi~o&FG57/Ag><BEe#;(R<,7Y#w$=pw7%wgB:m;mDn`$2|p]m');
define('LOGGED_IN_SALT',   'Q^V.N$M),`%=Cs3VmX$; s.X`=,-6M]cRR^cnXP|:5q@gnq3&F.>u b7eH3e~-|{');
define('NONCE_SALT',       'Ld9:&>n[#b2q%cenf G|g9=xrb76h/8+a2|(.{b4dk3A%r?voE*_7)T}u/NRkN7$');

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