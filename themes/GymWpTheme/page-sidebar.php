<p>hello from page-siderbar.php</p>

<?php  

/*
* Template Name: Page with Sidebar
*/

get_header(); ?>

<Main class="container page section with-sidebar">
  <div class="page-content">

  <?php get_template_part('template-parts/page', 'loop'); ?>

  </div>

  <?php get_sidebar(); ?>

</Main>



<?php get_footer(); ?>

