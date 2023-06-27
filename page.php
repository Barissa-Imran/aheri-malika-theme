<?php
/*
Template Name: Page Template
*/

get_header();
?>
      <section class="m-2">
        <?php
        if( have_posts() ) {
            while( have_posts() ) {
                the_post(  );

                the_content();
            }
        }
        ?>
    </section>

<?php
get_footer();
?>
