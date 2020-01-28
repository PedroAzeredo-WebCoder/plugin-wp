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
define( 'DB_NAME', 'wordPress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '@>iohsQa*64t<lU 3oH`OKv?4)`HOt#X|N.;65.1@q8  dk?vs*=f)tv({ 8SGu7' );
define( 'SECURE_AUTH_KEY',  ';&9Q)[n8plrtDr8q`gP^v2a8R4peay*SmKmn]CC`cCCJyLv+-*Ra~yV ey=)F@9p' );
define( 'LOGGED_IN_KEY',    '1B8Obt~Ws5+Dd+Z I+=O]pC.@eM<fMN!8N rH~.L.?ntfnSYJ#PWVzGg#qU=~ETh' );
define( 'NONCE_KEY',        '>5oZ>i~S1Jzw*n20=j9@;|]=N9#,_lWnUb<Q{sO7fMx,R}q<.0Hcq>8h_+(-XqJ.' );
define( 'AUTH_SALT',        'd^O{dzMT%^Ug6B~6fVE( %UhPB^]&/t3*0|I}MpqpVf4BZ [=V^I l{At2b,9aN5' );
define( 'SECURE_AUTH_SALT', 'W,s:#WFYDVwsy(#at0,k=AUjpn4~nb;(oJ{*E9PI~EzsJTWSg>K}tE7:J`+$,.51' );
define( 'LOGGED_IN_SALT',   'UZ.RMPPDkK^x><P%rSehj!z|WVdlbhy@Q7gH0hyOIkrkZAL8e: kfJaOL~uz~Wz%' );
define( 'NONCE_SALT',       'RG&x1%fF^7n38LTJd@/lyj?[S;*aN`{gs%Sk_i5?2wU)y8.+S+P2r#K-DaJ+3c;9' );

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
