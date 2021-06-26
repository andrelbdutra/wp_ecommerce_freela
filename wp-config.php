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
define( 'DB_NAME', 'wp_freela_1' );

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
define( 'AUTH_KEY',         'vau1%)##dc<R2D`/I2{L(fORVd7g)Yb=t$P^|[+`?# gK3WZuhqJMBTc+Ezb~~/#' );
define( 'SECURE_AUTH_KEY',  'TlF7Sc[kE>Z}PS/<0QK;3RyMQ|!Cy6.*W@:r>^UDc7Bl{BFK2XQPttdgcmRqpk4+' );
define( 'LOGGED_IN_KEY',    ':_>uf3 f.&oVZ+u0=mn .[r1GaWi&Kj.$MmRn/Pp>Aj^IHWaSm4,KKnzC%5[-p]s' );
define( 'NONCE_KEY',        'C],ehN2;Mr?BD^@39nx4M`aXIoDoH^k$JU{E(h zW[FJmwG_[ q!29ZcrZ$%_x.C' );
define( 'AUTH_SALT',        ')we3V&:!,s%4S~*d?dvk[hXFTWocYN<S15HCN<W0hky,<dJf4[d0G:>+D5itEFFG' );
define( 'SECURE_AUTH_SALT', '~FKaXy}rf3qB{`H07v;l~ei:(`Dic:T2klG6iNiBeL/qS7UB04D2obd|<.|QXK%:' );
define( 'LOGGED_IN_SALT',   '!x&{,7$9_enLFNeQ(Ntxc-T%%6GKGt9[FT}xDLDkIv~(:@$kTT]CLKuRE{|`uVaX' );
define( 'NONCE_SALT',       '+&ygB{?X,.<jp:Vc#_$ccN)64__:[t(3.0()W}Z]a=: o.#a?@agn z4Sa+MIEJ6' );

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
