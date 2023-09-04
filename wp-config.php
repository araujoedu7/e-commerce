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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'araujo' );

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
define( 'AUTH_KEY',         'xr=pc2+H&n9Xkb<S>BbjvH3@1Z~fd;Y,y9%<O6!sc+Hjc=w7kBD~,9tuv$6sHgH|' );
define( 'SECURE_AUTH_KEY',  '|-jcx4FD|]Qkby2r[}WlHx$~ *C_L.w7~_vP|#4nN4{(B@2gjx<g]2~f&SLDQvDh' );
define( 'LOGGED_IN_KEY',    '@z%I+]/ns9s~@)fN=?rDED3RH-RuI|DnN%VYFrav1u5,^@X/W&6`({W*V.kafZ p' );
define( 'NONCE_KEY',        'SpY99<qdB[tE9}0G= 8gf-pNrvWTE6|5>.>,>DxlsI.i08b#=k$*;AJap`2T<TIo' );
define( 'AUTH_SALT',        '4hlN.3{Uv;xcZ^+T+Jp8D9W^4[pUn1fSY6a}i^KXbxtniXXooZjMi9VRs]UZ5p*u' );
define( 'SECURE_AUTH_SALT', 'WvC8~Lq2gz/`tjh:5{>Lq3@T(,_ ,&a=u?q0<|39Oi)_G&;QwAwrgx:u,&f$(YG5' );
define( 'LOGGED_IN_SALT',   'vIVT l:j__l8<s.$/H*i%?.,}gUTRG:&64k;!H?~k$0ONq0EOz<0DVu6b6k$CR_-' );
define( 'NONCE_SALT',       '[d?=?tYN20i.@]Ml+ygQuh|@j|Y#5Rah{ISMlCqM}=`jbP+bULa5o%P)C_)@Fw)p' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
