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

$args = [
    "post_type" => ["work"],
    "post_status" => ["publish"],
    "posts_per_page" => -1,
    "orderby" => "menu_order",
    "order" => "ASC",
];
$context["works"] = Timber::get_posts($args);

Timber::render(
    ["page-" . $context["post"]->post_name . ".twig", "page.twig"],
    $context
);
