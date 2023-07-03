 <?php
 /*
Template Name: archive Template
*/

 get_header();
 ?>

<main>
      <section class="journal-hero" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/journal/journal-image.jpg);">
        <div class="journal-overlay">
          <h2 class="journal-heading">
            <?php
            if('malika_event' == get_post_type()) {
              echo "Events";
            } else {
              echo "Journal";
            }
            ?>
          </h2>
        </div>
      </section>
      <section class="journal-content">
        <div class="journal-content_primary">
          <div class="journal-content_title">
            <p class="journal-content_header"><?php the_archive_title() ?></p>
          </div>
        <?php
        if( have_posts() ) {
            while( have_posts() ) {
                the_post(  );

                get_template_part( 'template-parts/content', 'archive' );
            }

            $next = next_posts_link('Newer posts');
            $previous = previous_posts_link( 'Older posts' );
        }
        ?>
          <div
            class="journal-page d-flex justify-content-center align-items-center mt-5 border-top"
          >
            <a href="<?=$previous ?>"><i class="bi bi-chevron-left"></i></a>
            <p class="p-2 m-3 border border-dark-subtle rounded">1</p>
            <a href="<?=$next ?>"><i class="bi bi-chevron-right"></i></a>
          </div>
        </div>
        <div class="aside d-none d-lg-block">
          <div
            class="aside-img"
            style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/home/event-banner.jpg)"
          ></div>
          <div class="aside-text_container">
            <p class="aside-text">WANT TO ATTEND OUR EVENTS?</p>
            <a href="
            <?php
            get_post_type_archive_link('malika_event');
            ?>" class="aside-link"> Know More > </a>
          </div>
        </div>
      </section>
    </main>

 <?php
 get_footer();
 ?>
