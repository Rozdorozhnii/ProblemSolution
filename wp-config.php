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
define('DB_NAME', 'problemSolutionsDB');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Qt91?/%Kzg%,~qhkPP(. UDdVS@9/NY?KwN!;/=5*0%E>:IQD)v-tJT<9jmL-I;@');
define('SECURE_AUTH_KEY',  '}rTy;yBrq@_vg`]l{l{0ZaNw`u]zHSrQ5~:e8vf %cNP5z{-gT-DNv5KWAlO%J6d');
define('LOGGED_IN_KEY',    'jQQqt2,D8UQB=JSEV-NNO#valg{>a;/x=zW!*msB<KZfBZZPQjUc`/Kh{F+%7/;&');
define('NONCE_KEY',        'y wP3gC_6BT<46h!wv2D7Wp)^QoGva7(Lb]Qb*X{Lme|OP-?NU@lCv7Pq;&227I$');
define('AUTH_SALT',        ']][YLV>*Kd9C*u;dD:r]}H7(O>/QBgbF9{W~PG}B5pj,w$<vGueV_R}:BG)/{BFE');
define('SECURE_AUTH_SALT', 'yBz+h=~9B^cE/2|?&OSWX,D[abc^$6],YehR mkohjOd1r;$]eD7egs.r(S+<m-S');
define('LOGGED_IN_SALT',   'DkLN#^o*}.z*pOm5(/T)M9P6DL~nU&[M[fvK-6)Es}:s$]dF2taDG ZS}qmZa(^v');
define('NONCE_SALT',       'EGa3uvsU7?W?0LH>Uqf64Ua,MH~H[X)uO=C^Q R+.f$#Eo}5(T=M%:rR<~6~5ZK8');

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
