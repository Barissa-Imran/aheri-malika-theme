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

