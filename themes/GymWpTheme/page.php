<!-- page.php refers to Default WordPress Pages -->

<p>hello from page.php</p>

<?php get_header(); ?>

<Main class="container page section no-sidebars">

  <?php get_template_part('template-parts/page', 'loop'); ?>

</Main>

<?php get_footer(); ?>

