<?php get_header(); ?>

    <section class="row showcase animated fadeIn">
      <div class="container">
        <div class="col-md-12">
          <div class="showcase-content">
            <h1><?php echo get_theme_mod('showcase_heading'); ?></h1>
            <p class="lead"><?php echo get_theme_mod('showcase_text'); ?></p>
            <a href="<?php echo get_theme_mod('first_button_url'); ?>" class="btn btn-default btn-lg"><i class="<?php echo get_theme_mod('first_button_icon'); ?>"></i> <?php echo get_theme_mod('first_button'); ?></a>
            <a href="<?php echo get_theme_mod('second_button_url'); ?>" class="btn btn-default btn-lg"><i class="<?php echo get_theme_mod('second_button_icon'); ?>"></i> <?php echo get_theme_mod('second_button'); ?></a>
            <a href="<?php echo get_theme_mod('third_button_url'); ?>" class="btn btn-default btn-lg"><i class="<?php echo get_theme_mod('third_button_icon') ?>"></i> <?php echo get_theme_mod('third_button'); ?></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Main section -->
    <?php 
      $latest_blog_posts = new WP_Query( array(
        'post_type' => 'post',
        'cat' => '-1',
        'posts_per_page' => 2,
        'tax_query' => array( array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array('post-format-aside', 'post-format-gallery'),
            'operator' => 'NOT IN'
           ) )
       ));
    ?>

    <?php 
      $i = 0;
      $section = 'section-a'; //section class
    ?>

    <?php if($latest_blog_posts->have_posts()): ?>
      <?php while($latest_blog_posts->have_posts()): $latest_blog_posts->the_post(); ?>
        <?php 
          $i++;
          if ($i % 2 != 0) {
             // Odd post
            $section_class = 'section-a';
            $left_class = 'col-lg-5 col-sm-6 animated fadeInLeft';
            $right_class = 'col-lg-5 col-lg-offset-2 col-sm-6';
            $img_class = 'img-responsive img-circle animated fadeInLeft';
          }else{
            // Even post
            $section_class = 'section-b';
            $left_class = 'col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6  animated fadeInRight';
            $right_class = 'col-lg-5 col-sm-pull-6 col-sm-6';
            $img_class = 'img-responsive img-circle animated fadeInRight';
          } 
        ?>
        <div class="<?php echo $section_class; ?>">
          <div class="container">
            <div class="row">
              <div class="<?php echo $left_class; ?>">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading"><?php the_title(); ?></h2>
                <div class="excerpt"><?php the_excerpt(); ?></div>
              </div>

              <div class="<?php echo $right_class; ?>">
                <?php 
                  the_post_thumbnail('full', [
                    'class' => $img_class
                  ]); 
                ?>
              </div>
            </div>
          </div>
        </div>
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