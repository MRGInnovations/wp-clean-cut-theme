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