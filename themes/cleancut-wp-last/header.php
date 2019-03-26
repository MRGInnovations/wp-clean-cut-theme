<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php if(get_theme_mod('animation', 1)): ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <?php endif; ?>
    <title><?php bloginfo('name'); ?> | 
      <?php if(is_front_page()): ?>
        <?php bloginfo('description'); ?>
      <?php else: ?>
        <?php wp_title(''); ?>
      <?php endif; ?>
    </title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <style>
      .showcase{
        height: 700px;
        background: url("<?php echo get_theme_mod('showcase_background'); ?>");
        background-size: cover;
        background-repeat: no-repeat;
      }

      .banner{
        background: url("<?php echo get_theme_mod('banner_background'); ?>") center center;
        background-size: cover;
        background-repeat: no-repeat;
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
        <div id="navbar" class="collapse navbar-collapse navbar-ex1-collapse">
            <?php 
              wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'depth' => 2,
                'menu_class' => 'nav navbar-nav navbar-right',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker()
              ]);
            ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>