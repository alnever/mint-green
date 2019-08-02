<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="lang" content="en">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/style.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="container">

      <!-- site header -->
      <header class="header">
        <nav>
          <p class="brand">
            <a href="<?php home_url(); ?>"><?php bloginfo("name"); ?></a>
          </p>
          <ul class="menu">
            <li class="menu-item"><a href="#">About</a></li>
            <li class="menu-item active"><a href="<?php home_url(); ?>">Articles</a></li>
            <li class="menu-item"><a href="#">Entrance</a></li>
          </ul>
        </nav>
        <div class="title-zone">
          <div class="title">
            <?php bloginfo("name"); ?>
          </div>
          <div class="subtitle">
            <?php bloginfo("description"); ?>
          </div>
          <div class="title-decor">

          </div>
        </div>
      </header>
