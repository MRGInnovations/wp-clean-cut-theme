<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description') : wp_title('');?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php if(get_theme_mod('animation', 1)) : ?>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php endif;?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
    <style>
    	.showcase{
    		height: <?php echo get_theme_mod('showcase_height', 700)?>px;
    		background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>);
    	}

    	.banner{
    		background: url(<?php echo get_theme_mod('banner_image', get_bloginfo('template_url'). '/img/banner.jpg');?>) no-repeat  center center;
    	}
    	
    </style>
  </head>

  <body>
     
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse  navbar-ex1-collapse">
          <?php
            wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'depth'          => 2,
                'container'      => false,
                'menu_class'     => 'nav  navbar-nav  navbar-right',
                'fallback_cb'    => 'wp_boostrap_navwalker::fallback',
                'walker'         => new wp_bootstrap_navwalker()
                )
            );
          ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>