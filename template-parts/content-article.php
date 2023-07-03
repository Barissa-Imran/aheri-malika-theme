<div
  class="post-thumbnail"
  style="background: url(<?php echo the_post_thumbnail_url() ?>)"
></div>
<h2 class="post-heading">
  <?php the_title() ?>
</h2>
<div
  class="post-info border-bottom border-dark-subtle d-flex justify-content-between"
>
  <div class="post-author"><?php the_author() ?></div>
  <div class="post-date"><span><?php the_category() ?></span> | <?php the_date( 'F j, Y') ?></div>
</div>
<div class="post-text">
  <?php echo the_content() ?>
</div>
<?php
  $event_link = get_post_meta(get_the_ID(), 'event_register_link', true);
  $event_location = get_post_meta(get_the_ID(), 'event_location', true);
  $event_from_date = get_post_meta(get_the_ID(), 'event_from_date', true);
  $event_to_date = get_post_meta(get_the_ID(), 'event_to_date', true);
  $event_from_time = get_post_meta(get_the_ID(), 'event_from_time', true);
  $event_to_time = get_post_meta(get_the_ID(), 'event_to_time', true);

  if (get_post_type() == 'malika_event') {
    echo '<div class="d-flex flex-column g-3" style="font-size: 1.8rem; margin: 0 10rem; padding: 1rem; background: #fff;">
    <p><b>Venue:</b> ' .$event_location . '<p> <b>Link:</b>
    <a target="_blank" href="' . esc_url($event_link) . '">Register Now</a>
    <div>
    <span><b>From:</b> ' .$event_from_date . '</span>
    <span><b>To:</b> ' .$event_to_date . '</span><br>
    </div>
    <div>
    <b>Time</b>
    <span>' .$event_from_time . '</span>
    <span> - ' .$event_to_time . '</span>
    </div>
    </div>';
  }
  ?>
<div class=" post-back d-flex justify-content-between align-items-center">
        <a href="<?php

        $page = get_page_by_title( 'Journal' );

        if($page) {
            echo get_permalink( $page );
        }

        ?>"
        class="">
            <i class="bi bi-arrow-left"></i> Back to Journal
        </a>
        <span class="comment" style=""><a href="#comments"><i class="bi bi-chat-fill"></i> <?php comments_number() ?></a>
</div>

<?php
  // Output the comments
  comments_template();
?>

