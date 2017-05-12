<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mindminers');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'mindminers');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'meseems123');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K?H#rv!Oh8:%GG>: O$ ,~#4e!F#%Gk ]Ms1Q^9.m/YbSmFRG@;HTJR@0Q<DHRt/');
define('SECURE_AUTH_KEY',  'DXJYaPyFr0Yw<CF)KnBI|`xm!MI/ntd=pK5xwYewnoP5t8KB*fLz`)rK0qhpJ`h<');
define('LOGGED_IN_KEY',    'B?<;9(tcH &?Iqx*RYU@U~.NNkG,h1K^hT&=PYUbcd^&6mEr=yCy%$0t|K?1K;JN');
define('NONCE_KEY',        '-%144Y>u!+{g3LDx07}qZ.hL^mrTY&4j3C6+uD(:tLB1v/3q8pE>Nxz#X_C6%qjl');
define('AUTH_SALT',        '1V>rk|ePRvqz0c3C!APV[5JBkvsjXJDnp2U6NXsj)jrs~#X*rFeY#(6t2/yW1jO~');
define('SECURE_AUTH_SALT', 'WgbL>r(ah2pF+AV!IB{ls`BzCr!:!2>u(mIF!-KcijM6x8b7(F4i/tUCNlKmm7u|');
define('LOGGED_IN_SALT',   'cqcW~HLdy58~-F4/@?RmT:2oZV?IWxM?*Z2!;W$>>GY.:q9pQmQ]OLUkXOHZcY-,');
define('NONCE_SALT',       '[Ni=HJL1K?/fg*MRoUNT;<w7-f[7koa97) I+Fl&HO~iT]=(Ce;hk]&JV* VS[Ay');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wpmm_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
