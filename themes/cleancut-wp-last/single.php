<?php get_header(); ?>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>
			<section class="row title-bar">
			    <div class="container">
			      <div class="col-md-12">
			        <h1><?php the_title(); ?></h1>
			      </div>
			    </div>
			</section>
			<section class="row page">
		      <div class="container">
		        <div class="col-md-8">
		          <div class="post-thumbnail">
		            <?php the_post_thumbnail(); ?>
		          </div>
		          <div class="metainfo">
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
		          </div>
		          <?php the_content(); ?>
		          <hr>
		          <?php comments_template(); ?>
		        </div>

		        <div class="col-md-4">
		           	<?php if(is_active_sidebar('sidebar')): ?>
						<?php dynamic_sidebar('sidebar'); ?>
		           	<?php endif; ?>
		        </div>
		      </div>
		    </section>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>