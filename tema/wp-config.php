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
define( 'DB_NAME', 'bd_livecred' );

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
define( 'AUTH_KEY',         '@M6>1dxX&9-Xa&W9L9]bIL&5~UJNZ-7SprH>47.CqwLc_~XAfhmK!#imbn?g6|l*' );
define( 'SECURE_AUTH_KEY',  'Pr0t?$U`sKR%Tib A8zXJ(QT6HtO1m,Sy^MbfV7c1#(x3!S^eF2Lav*vP&x[^5,p' );
define( 'LOGGED_IN_KEY',    'mvGUr<aQzDJ)MR$z*VmH}7DXy8@a)5t=7[iJp,B_PYU}}/s<Iz}s;;YOJh)o++eN' );
define( 'NONCE_KEY',        '>bru[KQ}czLX$;kH>ptAS_N_@h`EhGi{HL_24&o}uUr:b40E/Ll`ugY-n$!&^%.X' );
define( 'AUTH_SALT',        ':S{hRL5]|ro@K#Y62ofg0<b0Zd9b%xgpuvzA>TQ`fxaWV^fi#o},,brYXo#2Ez%z' );
define( 'SECURE_AUTH_SALT', '$9#K_n-`4Awd9w(i,4&BW!oQGE?X[ql<~l>vlAi)!:$$0WTUA6]m2}P! ylVq2Qb' );
define( 'LOGGED_IN_SALT',   'erZqS*frN^cx|e$Ss1}cOXsNUT9dwd;:tr?4hC#x}[fD-o>{1oTs<1xL)|0ULHze' );
define( 'NONCE_SALT',       'Z3(1r+DD!LU]XEis9z$!dqB]:v%9ia2$B~|C%tWOD*P(.v6mAvC@X&N|kwBs~=TG' );

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
