<?php
/**
 * single.php si occupa di visualizzare un singolo post
 * o custom post type.
 *
 * Se il post è protetto da password, viene renderizzato
 * single-password.twig.
 *
 * Altrimenti viene renderizzato il primo file `.twig`
 * trovato in ordine di priorità:
 * - `single-{id}.twig`
 * - `single-{slug}.twig`
 * - `single-{post_type}.twig`
 * - `single.twig`
 */

use Timber\Timber;

$context = Timber::context();
// $context["post"] = $timber_post;

$context["post"] = Timber::get_post();

// Timber::render(
//     [
//         "single-" . $timber_post->ID . ".twig",
//         "single-" . $timber_post->slug . ".twig",
//         "single-" . $timber_post->post_type . ".twig",
//         "single.twig",
//     ],
//     $context
// );

Timber::render(
    ["single-" . $context["post"]->post_type . ".twig", "single.twig"],
    $context
);
