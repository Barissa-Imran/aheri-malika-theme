<?php
/*
Template Name: Journal Template
*/

get_header();
?>
<main>
      <section class="journal-hero" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/journal/journal-image.jpg);">
        <div class="journal-overlay">
          <h2 class="journal-heading">Journal</h2>
        </div>
      </section>
      <section class="journal-content">
        <div class="journal-content_primary">
          <div class="journal-content_title">
            <p class="journal-content_header"><?php the_archive_title() ?></p>
          </div>
          <?php
// The WordPress loop to display posts
if (have_posts()) {
    while (have_posts()) {
        the_post();
        // Output post content as desired
        // the_title('<h2>', '</h2>');
        the_content();
    }

}

// Custom query to retrieve and display posts
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, // Display all posts
);

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) {
    while ($custom_query->have_posts()) {
        $custom_query->the_post();
        // Output post content as desired
        get_template_part( 'template-parts/content', 'archive' );
    }

    $next = next_posts_link('Newer posts');
    $previous = previous_posts_link( 'Older posts' );
    wp_reset_postdata(); // Reset the custom query
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
            <a href="#contact" class="aside-link"> Know More > </a>
          </div>
        </div>
      </section>
    </main>
<?php
get_footer(); // Include the footer template
?>
