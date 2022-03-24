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
      <li>
        <h2>
          Natti Natasha
        </h2>
        <p>
          Argentina
        </p>
      </li>

      <li>
        <h2>
          Post Malone
        </h2>
        <p>
          United States
        </p>
      </li>
      <li>
        <h2>
          Shirley Setia
        </h2>
        <p>
          New Zealand / India
        </p>
      </li>
      <li>
        <h2>
          Axwell /\ Ingrosso
        </h2>
        <p>
          Sweden
        </p>
      </li>
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
      <li>
        <h2>
          Kyary Pamyu Pamyu
        </h2>
        <p>
          Japan
        </p>
      </li>
      <li>
        <h2>
          Stella Mwangi
        </h2>
        <p>
          Kenya / Norway
        </p>
      </li>
      <li>
        <h2>
          Wizkid
        </h2>
        <p>
          Nigeria
        </p>
      </li>
      <li>
        <h2>
          Stormzy
        </h2>
        <p>
          UK
        </p>
      </li>
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
      <li>
        <h2>
          Swet Shop Boys
        </h2>
        <p>
          UK / US
        </p>
      </li>
      <li>
        <h2>
          Christine and the Queens
        </h2>
        <p>
          France
        </p>
      </li>
      <li>
        <h2>
          Ryan McGeady
        </h2>
        <p>
          Scotland
        </p>
      </li>
      <li>
        <h2>
          Die Antwoord
        </h2>
        <p>
          South Africa
        </p>
      </li>
      <li>
        <p>
          …and more TBA
        </p>
      </li>
    </ul>
  </div>
  <a href="#register" class="js-scroll scroll-to"></a>
</section>

	</main><!-- #main -->

<?php

get_footer();
