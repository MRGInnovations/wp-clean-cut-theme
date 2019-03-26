<?php get_header(); ?>
<?php 
  $i = 0;
  $section = 'section-a';
?>
  <section class="row title-bar">
    <div class="container">
      <div class="col-md-4">
        <h1><?php echo __('Blog', 'cc'); ?></h1>
      </div>

      <div class="col-md-8">
        <div class="sub-nav">
          <?php if(is_active_sidebar('subnav')): ?>
            <?php dynamic_sidebar('subnav'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?> 
        <?php
        $i++; 
        if ($i % 2 != 0) {
          // Odd
            $section_class = 'section-a';
            $left_class = 'col-lg-5 col-sm-6 animated fadeInLeft';
            $right_class = 'col-lg-5 col-lg-offset-2 col-sm-6';
            $img_class = 'img-responsive img-circle animated fadeInLeft';
        }else{
          // Even
            $section_class = 'section-b';
            $left_class = 'col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6  animated fadeInRight';
            $right_class = 'col-lg-5 col-sm-pull-6 col-sm-6';
            $img_class = 'img-responsive img-circle animated fadeInRight';
        }
      ?>

       <?php if(has_post_format($format, $post_id) && get_post_format($post_id) == 'aside'): ?>
        <?php require "content-aside.php"; ?>
      <?php elseif(has_post_format($format, $post_id) && get_post_format($post_id) == 'gallery'): ?>
        <?php require "content-gallery.php"; ?>
      <?php else: ?>
        <?php require "content.php" ?>
      <?php endif; ?>
    <?php endwhile; ?>
  <?php endif; ?>

    <section class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2><?php echo get_theme_mod('banner_text') ?></h2>
          </div>

          <div class="col-lg-6">
            <ul class="list-inline banner-social-buttons">
              <li>
                <a href="<?php echo get_theme_mod('first_banner_button_url'); ?>" class="btn btn-default btn-lg"><i class="<?php echo get_theme_mod('first_banner_button_icon'); ?>"></i><span class="network-name"><?php echo get_theme_mod('first_banner_button'); ?></span></a>
              </li>
              
              <li>
                <a href="<?php echo get_theme_mod('second_banner_button_url'); ?>" class="btn btn-default btn-lg"><i class="<?php echo get_theme_mod('second_banner_button_icon'); ?>"></i><span class="network-name"><?php echo get_theme_mod('second_banner_button'); ?></span></a>
              </li>

              <li>
                <a href="<?php echo get_theme_mod('third_banner_button_url'); ?>" class="btn btn-default btn-lg"><i class="<?php echo get_theme_mod('third_banner_button_icon'); ?>"></i><span class="network-name"><?php echo get_theme_mod('third_banner_button'); ?></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>