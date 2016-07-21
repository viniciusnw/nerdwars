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
define('DB_NAME', 'u606440028_nw');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'u606440028_nw');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '34282952');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'K<9Y<j]m%XumvoJKpr7_I|/M[X FJU:6r(c-YQF-v?g,;ve#O6|j wLYecrs4sbY');
define('SECURE_AUTH_KEY',  'XdhJR.C#ns}|+XN Dg_3cK;|{^SEk2_Ae47G):~q]|hT1|bN1Ihh5N;|L%Cf`+==');
define('LOGGED_IN_KEY',    'X[_.=e$%<aS$Ue1l8Hp{#UG<~Ipq#]9v;/~#Yle>(U?4-,SXE+:3`Z|h|kC$6COt');
define('NONCE_KEY',        'X>@;yn;+*7]!]n)V3+/p_4Q_F{N(5SY5H/ r!o/LLe]j(?rMjP`c&lbk?O-6okM]');
define('AUTH_SALT',        'tP8kE}N%3KcKG|L;qk/?Q*-:[-mRhQc.Da*h_XL1LkU|g,#%{*7vrTdD{$_0d(# ');
define('SECURE_AUTH_SALT', 'm_Q0@5C4!+19<e3eHp<P#B?%,tzG.U[xl_E>$Z{pT=GqY8_]4WlP&o&hV)}4 hLo');
define('LOGGED_IN_SALT',   'jfw8xXRo&bEXm[he-xdhbiH!c|EnsUB0^+u$--bJm53NS|3]*n[KFd)t65yZ^>+@');
define('NONCE_SALT',       '1rn8s(9yEQ0E&$VYI19%O,[}Q+b]u3, {{ j|hpcSCLb3vwRY:dE>T4<n760!49M');

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
