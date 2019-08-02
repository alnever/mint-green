<?php get_header(); ?>

<!-- main content -->
<div class="content">


  <!-- posts: main cycle -->
  <?php if (have_posts()): ?>
    <div class="row">
      <?php while (have_posts()): the_post(); ?>
        <div class="col-100">
          <article class="post-full">
            <div class="title-zone">
              <div class="title">
                <?php the_title(); ?>
              </div>
              <div class="title-decor">

              </div>
            </div>
            <div class="post-text">
              <?php the_content(); ?>
            </div>
          </article>
        </div>
      <?php endwhile; ?>
    </div> <!-- row -->

  <?php endif; ?>
</div> <!-- content -->

<?php get_footer(); ?>
