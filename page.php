<?php
/**
 * page.php si occupa di visualizzare una singola page
 * cioè un post con post_type uguale a "page".
 *
 * Il template da renderizzare è il primo file `.twig`
 * trovato in ordine di priorità:
 * - `page-{id}.twig`
 * - `page-{slug}.twig`
 * - `page.twig`
 */

use Timber\Timber;

$context = Timber::context();
$timber_post = Timber::get_post();
$context["post"] = $timber_post;

Timber::render(
    [
        "page-" . $timber_post->ID . ".twig",
        "page-" . $timber_post->slug . ".twig",
        "page.twig",
    ],
    $context
);
