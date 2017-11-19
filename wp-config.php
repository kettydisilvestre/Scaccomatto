<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'scaccomatto');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UWiW45H4BG0sq~L=hZsX4FyroE6of0sND1nE~zJjPyoQwdZba YVdE-3^|ftr}&U');
define('SECURE_AUTH_KEY',  '%G! )AW=mbs-wz8~Ny{@A)u@kR[_a-GmO+gupyy2.)|GAVz.6E///kJ_s]}iWZW)');
define('LOGGED_IN_KEY',    'h![.+n*+w/4$**UFxidJvCI03 u+Ze)=0ur`P/`66lMwnq`D;sL:_+{DW}bW<SKd');
define('NONCE_KEY',        '< {hT{iJcl4^<6r4CB~]O&+ta2cd}aclnjP68^tRDV9uvmBeFbTY6GX?>.?UBql{');
define('AUTH_SALT',        '~+v8]8ANT7RR73i(rSha#9k@H|ZtQ|L8l;HS%>zk]`9$&Wj#TC94xF4oX 33uk<:');
define('SECURE_AUTH_SALT', '| 0XN5W=74EY$%<fmM}oS*CX*)mN#Ld(W7~Oe%[3pu7c}U.9H3Q$6_Ovuf_Q.`!]');
define('LOGGED_IN_SALT',   'g`d{Bp|U%gjxKc<8M3tN1U*K*`,PY^fVB&!n4d0I!Wllh{rk,QqPD(qhTbg0v_V:');
define('NONCE_SALT',       '{y*qoQPQSQ*%Y~16#z:j<T%$0p@afyX(6lAPL49dL:5;eem-~~[s2<0izOpQ]d1j');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');