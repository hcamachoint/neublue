<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <nav class="navbar navbar-dark bg-nav navbar-expand-md static-top">
         <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <?php
       wp_nav_menu([
         'menu'            => 'top',
         'theme_location'  => 'top',
         'container'       => 'div',
         'container_id'    => 'bs4navbar',
         'container_class' => 'collapse navbar-collapse navbar-right',
         'menu_id'         => false,
         'menu_class'      => 'navbar-nav ml-auto', //mr-auto to left
         'depth'           => 2,
         'fallback_cb'     => 'bs4navwalker::fallback',
         'walker'          => new bs4navwalker()
       ]);
       ?>
    </nav>
    </header>
