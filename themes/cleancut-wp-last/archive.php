<?php get_header(); ?>
<?php 
  $i = 0;
  $section = 'section-a';
?>
  <section class="row title-bar">
    <div class="container">
      <div class="col-md-4">
        <h1>
          <?php 
            if (is_category()) {
              single_cat_title();
            }elseif(is_author()){
              the_post();
              echo "Archives by: " . get_the_author();
            }elseif(is_tag()){
              single_tag_title();
            }elseif(is_day()){
              echo "Archives by day: " . get_the_date();
            }elseif(is_month()){
              echo "Archives by month" . get_the_date('F Y');
            }elseif(is_year()){
              echo "Archives by year" . get_the_date('Y');
            }else{
              echo "Archives";
            }
          ?>
        </h1>
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
      <?php $i++; 
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
      <!-- Main section -->
      <div class="<?php echo $section_class; ?>">
        <div class="container">
          <div class="row">
            <div class="<?php echo $left_class; ?>">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <a href="<?php the_permalink(); ?>"><h2 class="section-heading"><?php the_title(); ?></h2></a>
                <p class="meta"><?php echo __('Created by') ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a> <?php echo __("on"); ?> <?php the_time('F j, Y g:i'); ?> | <?php echo __("Posted in");  ?>
                <?php 
                  $categories = get_the_category();
                  $separator = ", ";
                  $output = null;
                  if($categories){
                    foreach ($categories as $category) {
                      $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>' . $separator;
                    }
                  }
                ?>
                <?php echo trim($output, $separator); ?>
                </p>
              <div class="excerpt"><?php the_excerpt(); ?></div>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm"><?php echo __('Read More', 'cc'); ?></a>
            </div>

            <div class="<?php echo $right_class; ?>">
              <?php the_post_thumbnail('full', ['class'=>$img_class]); ?>
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