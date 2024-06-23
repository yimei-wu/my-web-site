<?php

use Timber\Timber;

$context = Timber::context();

$context["post"] = Timber::get_post();

$next_post = get_next_post();
if ($next_post) {
    $context["next_post"] = Timber::get_post($next_post->ID);
}

Timber::render(
    ["single-" . $context["post"]->post_type . ".twig", "single.twig"],
    $context
);
