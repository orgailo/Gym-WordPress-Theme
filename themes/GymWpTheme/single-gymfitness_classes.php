<!-- single.php refers to WordPress Posts -->

<p>hello from single-gymfitness_classes.php</p>


<?php get_header(); ?>

<Main class="container page section with-sidebar">
  <div class="page-content">

  <?php get_template_part('template-parts/page', 'loop'); ?>

  </div>

  <?php get_sidebar(); ?>

</Main>

<?php get_footer(); ?>