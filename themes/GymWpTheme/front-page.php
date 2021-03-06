<!-- Home Page -->

<?php get_header('front'); ?>

<p>hello from front-page.php</p>

<?php while( have_posts() ): the_post(); ?>

  <section class="welcome text-center section">
    <h2 class="text-primary"><?php the_field('welcome_heading'); ?></h2>
    <p><?php the_field('welcome_text'); ?></p>
  </section>

  <section class="section-areas">
    <ul class="areas-container">
      <li class="area">
        <?php 
          $area1 = get_field('area_1'); 
          $image = wp_get_attachment_image_src( $area1['area_image'], 'mediumSize')[0];
        ?>
        <img src="<?php echo $image ?>" alt="">
        <p><?php echo $area1['area_name']; ?></p>
      </li>

      <li class="area">
        <?php 
          $area2 = get_field('area_2'); 
          $image = wp_get_attachment_image_src( $area2['area_image'], 'mediumSize')[0];
        ?>
        <img src="<?php echo $image ?>" alt="">
        <p><?php echo $area2['area_name']; ?></p>
      </li>

      <li class="area">
        <?php 
          $area3 = get_field('area_3'); 
          $image = wp_get_attachment_image_src( $area3['area_image'], 'mediumSize')[0];
        ?>
        <img src="<?php echo $image ?>" alt="">
        <p><?php echo $area3['area_name']; ?></p>
      </li>

      <li class="area">
        <?php 
          $area4 = get_field('area_4'); 
          $image = wp_get_attachment_image_src( $area4['area_image'], 'mediumSize')[0];
        ?>
        <img src="<?php echo $image ?>" alt="">
        <p><?php echo $area4['area_name']; ?></p>
      </li>
    </ul>
  </section>

<?php endwhile; ?>

<?php get_footer(); ?>


