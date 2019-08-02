<?php get_header(); ?>


      <!-- main content -->
      <div class="content">

        <div class="title-zone">
          <div class="title">
            Latests Posts
          </div>
          <div class="title-decor">

          </div>
        </div>

        <!-- posts: main cycle -->
				<?php
					$args = array(
						'posts_per_page' => 3,
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
		                  <?php the_title(); ?>
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

				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
      </div> <!-- content -->

<?php get_footer(); ?>
