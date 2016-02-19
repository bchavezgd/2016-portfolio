<?php
/**
 * The front page file.
 Template Name: SinglePage
 *
 * this will show up when dashboard is set to show a static page as the homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bchavez
 */
get_header();?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
<p>
  content stuff.
</p>
    <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'page' );

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>

  </main><!-- #main -->
</div><!-- #primary -->
<?php
get_sidebar();

get_footer();
