<?php
/*
Template Name: Single Template
*/

get_header();
?>

<main class="post-wrapper">
      <article class="post-container">
        <?php
        if( have_posts() ) {
            while( have_posts() ) {
                the_post(  );

                get_template_part( 'template-parts/content', 'article' );
            }
        }
        ?>
    </article>

<?php
get_footer();
?>
