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

$query = [
    "post-type" => "work", // in questa variabile il computer va a prendere tutti i post "student"
    "posts_per_page" => -1, // li prende tutti
    "post_status" => "publish", // prende quelli che sono stati pubblicati
];

$context["work"] = Timber::get_posts($query);

Timber::render(
    ["page-" . $context["post"]->post_name . ".twig", "page.twig"],
    $context
);
