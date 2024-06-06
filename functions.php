<?php
/**
 * Tema WordPress di base basato su Timber e
 * Advanced Custom Fields per Mohole.
 *
 * functions.php è il file di un tema WordPress
 * che contiene tutte le funzioni specifiche al
 * nostro tema.
 * https://developer.wordpress.org/themes/basics/theme-functions/
 */

// Questa espressione serve al nostro editor di
// codice per capire che tipo di oggetti stiamo
// utilizzando, in soldoni serve a far funzionare
// l'Intellisense di VSCode.
use Timber\Timber;

// Importa le dipendenze installate con Composer.
require_once __DIR__ . "/vendor/autoload.php";

// Importa la classe di Timber\StarterSite per
// inizializzarla dopo.
require_once __DIR__ . "/includes/theme-timber.php";

// Inizializza Timber
Timber::init();

// Imposta le cartelle dove Timber cercherà i file .twig
// all'interno del tuo tema.
Timber::$dirname = ["templates", "components"];

new StarterSite();
