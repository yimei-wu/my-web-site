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
$timber_post = Timber::get_post();
$context["post"] = $timber_post;

if (post_password_required($timber_post->ID)) {
    Timber::render("single-password.twig", $context);
} else {
    Timber::render(
        [
            "single-" . $timber_post->ID . ".twig",
            "single-" . $timber_post->slug . ".twig",
            "single-" . $timber_post->post_type . ".twig",
            "single.twig",
        ],
        $context
    );
}
