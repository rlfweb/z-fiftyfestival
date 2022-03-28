<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fifty_Festival
 */

get_header();
?>

	<main id="primary" class="site-main">

  <body>
    <section class="intro section section-pad bg-cover" id="intro">
  <div class="copy container">
    <a class="logo appear">
	<img src="<?php bloginfo('template_directory');?>/images/logo.svg">
    </a>
    <div class="marquee mix-difference">
			<!-- title in multiple repeating times using javascript -->
      <span>FIFTY Music Festival — November 10–12, Desert Valley</span>
    </div>
    <div class="mix-difference appear">
      <p>
        Held in the beautiful San Bernadino, CA, the first annual FIFTY Music Festival is an unmissable event. Over the course of
        3 days, we invite the rising stars in music from 50 different countries all over the world for a unique, cultural
        extravaganza.
      </p>
    </div>
  </div>
  <a href="#day-1" class="js-scroll scroll-to scroll-to-intro"></a>
</section>

<section class="section section-pad day day-1" id="day-1">
  <div class="container center">
    <h3 class="date">
      Friday Nov 10
    </h3>
    <ul class="lineup">

    <?php
  
  $args = array(
    'category_name' => 'friday'
);
    
  // Custom query.
  $query = new WP_Query( $args );
    
  // Check that we have query results.
  if ( $query->have_posts() ) {
    
      // Start looping over the query results.
      while ( $query->have_posts() ) {
    
          $query->the_post();
    
?>

    <?php     
          // Check rows exists.
      if( have_rows('artists') ):
      // Loop through rows.
      while( have_rows('artists') ) : the_row(); 
      ?>
        <li>
          <h2><?php the_sub_field('name'); ?></h2>
          <p><?php the_sub_field('country'); ?></p>
        </li>
    <?php endwhile;
    endif; ?>

<?php
}  
  }
    
  // Restore original post data.
  wp_reset_postdata();
  ?>


      <li>
        <p>
          …and more TBA
        </p>
      </li>
    </ul>
  </div>
  <span class="shape circle"></span>
  <span class="shape circle"></span>
  <span class="shape circle"></span>
  <span class="shape circle"></span>
  <span class="shape circle"></span>
  <span class="shape circle"></span>
  <span class="shape circle"></span>
  <span class="shape circle"></span>

  <a href="#day-2" class="js-scroll scroll-to"></a>

</section>



<section class="section section-pad day day-2" id="day-2">
  <div class="container center">
    <h3 class="date">
      Saturday Nov 11
    </h3>
    <ul class="lineup">

    <?php
  
  $args = array(
    'category_name' => 'saturday'
);
    
  // Custom query.
  $query = new WP_Query( $args );
    
  // Check that we have query results.
  if ( $query->have_posts() ) {
    
      // Start looping over the query results.
      while ( $query->have_posts() ) {
    
          $query->the_post();
    
?>

    <?php     
          // Check rows exists.
      if( have_rows('artists') ):
      // Loop through rows.
      while( have_rows('artists') ) : the_row(); 
      ?>
        <li>
          <h2><?php the_sub_field('name'); ?></h2>
          <p><?php the_sub_field('country'); ?></p>
        </li>
    <?php endwhile;
    endif; ?>

<?php
}  
  }
    
  // Restore original post data.
  wp_reset_postdata();
  ?>

      <li>
        <p>
          …and more TBA
        </p>
      </li>
    </ul>
  </div>
  <span class="shape squiggle"></span>
  <span class="shape squiggle"></span>
  <span class="shape squiggle"></span>
  <span class="shape squiggle"></span>
  <span class="shape squiggle"></span>
  <span class="shape squiggle"></span>
  <span class="shape squiggle"></span>
  <span class="shape squiggle"></span>
  <a href="#day-3" class="js-scroll scroll-to"></a>

</section>



<section class="section section-pad day day-3 bg-cover" id="day-3">
  <div class="container center">
    <h3 class="date">
      Sunday Nov 12
    </h3>
    <ul class="lineup">
  

    <?php
  
  $args = array(
    'category_name' => 'sunday'
);
    
  // Custom query.
  $query = new WP_Query( $args );
    
  // Check that we have query results.
  if ( $query->have_posts() ) {
    
      // Start looping over the query results.
      while ( $query->have_posts() ) {
    
          $query->the_post();
    
?>

    <?php     
          // Check rows exists.
      if( have_rows('artists') ):
      // Loop through rows.
      while( have_rows('artists') ) : the_row(); 
      ?>
        <li>
          <h2><?php the_sub_field('name'); ?></h2>
          <p><?php the_sub_field('country'); ?></p>
        </li>
    <?php endwhile;
    endif; ?>

<?php
}  
  }
    
  // Restore original post data.
  wp_reset_postdata();
  ?>

      <li>
        <p>
          … and more TBA
        </p>
      </li>

    </ul>
  </div>
  <a href="#register" class="js-scroll scroll-to"></a>
</section>

</main><!-- #main -->

<?php

get_footer();