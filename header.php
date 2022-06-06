<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">

  <title><?php bloginfo('name') ?></title>
  <?php
    wp_head();
  ?>
</head>
<body <?php body_class() ?>>
  <?php wp_body_open(); ?>
    <div class="l-content-wrapper">
      <header id="header" class="l-header">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <h1>
            <img class="c-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo">
          </h1>
        </a>
        <button class="c-hamburger-menu"></button>
        <nav class="p-nav">
          <ul>
            <li class="p-nav__item"><a href="<?php echo home_url(); ?>/products">PRODUCTS</a></li>
            <li class="p-nav__item"><a href="<?php echo home_url(); ?>/about">ABOUT</a></li>
            <li class="p-nav__item"><a href="<?php echo home_url(); ?>/company">COMPANY</a></li>
            <li class="p-nav__item"><a href="mailto:address">CONTACT</a></li>
          </ul>
        </nav>
        <div class="c-overlay"></div>
      </header>
