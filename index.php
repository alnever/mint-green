<?php get_header(); ?>


      <!-- main content -->
      <div class="content">

        <!-- posts: main cycle -->
				<?php
					$paged = ( get_query_var('paged') ? get_query_var('paged') : 1 );
					$args = array(
						'posts_per_page' => 9,
						'ignore_sticky_posts' => 1,
						'paged' => $paged,
					);
					$query = new WP_Query($args);
				?>
				<?php if ($query->have_posts()): ?>
	        <div class="row">
						<?php while ($query->have_posts()): $query->the_post(); ?>
		          <div class="col-30">
		            <article class="post">
		              <div class="title-zone">
		                <div class="title">
		                  <?php trim(get_the_title()) != '' ? the_title() : the_date() ; ?>
		                </div>
		                <div class="title-decor">

		                </div>
		              </div>
		              <div class="post-image">
		                <img src="./images/1.jpg" alt="">
		              </div>
		              <div class="post-excerpt">
		                <?php the_excerpt(); ?>
		              </div>
		              <div class="post-link">
		                <a href="<?php _e(get_permalink()); ?>">Read more...</a>
		              </div>
		            </article>
		          </div>
						<?php endwhile; ?>
	        </div> <!-- row -->

					<?php
						$args = array(
							'posts_per_page' => 9,
							'prev_text' => __('<<'),
							'next_text' => __('>>'),
							'screen_reader_text' => __(''),
						);
						the_posts_pagination($args);
					?>
					<!--
					<ul class="navigation">
	          <li> <a href="#"> << </a> </li>
	          <li class="active"> <a href="#"> 1 </a> </li>
	          <li> <a href="#"> 2 </a> </li>
	          <li> <a href="#"> 3 </a> </li>
	          <li> <a href="#"> >> </a> </li>
	        </ul>
					-->
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
      </div> <!-- content -->

<?php get_footer(); ?>
