<?php
/**
 * Default Header Template
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="h-100">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <?php // Place favicon.ico and apple-touch-icon.png in the root of the domain ?>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?= vite('main.js') ?>

  <link rel="stylesheet" href="/custom.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class('d-flex flex-column h-100'); ?>>

<header class="header-nav" role="banner">
  <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">lol</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMain">
        <?php h5bs_primary_nav(); ?>
      </div>
    </div>
  </nav>
</header>
