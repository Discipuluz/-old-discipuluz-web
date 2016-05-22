<?php
/**
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'discipuluz');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123123');

/** nome do host do MySQL */
define('DB_HOST', '104.236.255.104');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7uF,:Em`EHTLm;*%dR+u2p[ZRZ;(,N#iqNPa|a[yPvP06g[dW#-Cw S@RC^h9Xc2');
define('SECURE_AUTH_KEY',  'TWc&qP&G]foaA78 [~8S.%Av7d~yo:QyR$RB,`_V|Sm&=mAj Kafy(eH3f`1]-er');
define('LOGGED_IN_KEY',    'ceX4,{<><5r-tqcdA}s/ !@/eJ rh@OfugB|[8!v>)65a?zA`/3t|m<Xv G6sOlF');
define('NONCE_KEY',        'f ]0^NfdG.!EB&7(0;n^ENXOICZmA5mww1u4|kym`8Y?GgCeqHrdV3O~[dN2hxL$');
define('AUTH_SALT',        'C0C(0Ssr:eWBU$N7~kZv]Ipt$?y`*pntcb;Saw_UORT%~074+/p?<PZ$7G/Ui+n6');
define('SECURE_AUTH_SALT', '?rpL?86O3ljgsgWlIM[@:hrJcr2rAnyf4<b]ZL;E4++il-54UJED>dJ>w!X+wuxe');
define('LOGGED_IN_SALT',   '5 dR7aT^3{q; .;kf)-STVT.:sDw%5o]?pUG7Guz:ev}`;%w6%x2GR%@*j`$>EGc');
define('NONCE_SALT',       '!x,{AN}d-Ova6jl($ w=ih!buouQ@x=*`-k]$^gxI:A,`l//9]8@5+r0ZyY0cZk$');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
