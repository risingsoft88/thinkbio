<?php

/**
 * Template Name: Science Page
 */

use Timber\Timber;
use Timber\Post;

$context = Timber::get_context();
$context['post'] = new Post();

Timber::render('templates/page-science.twig', $context);
