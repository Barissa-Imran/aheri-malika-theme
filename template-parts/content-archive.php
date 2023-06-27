
          <article class="journal-article row">
            <div
              class="journal-article_img col-md-6"
              style="background: url(<?php echo get_the_post_thumbnail_url() ?>)"
            ></div>
            <div class="journal-article_content col-md-6">
              <div class="journal-feature">
                <div class="journal-feature_text p-2">
                  <span><?php the_category() ?></span> | <?php the_date( 'F j, Y') ?>
                </div>
                <a href="<?php the_permalink() ?>" class="journal-feature_heading">
                  <?php
                  the_title()
                  ?>
                </a>

                <div class="journal-feature_description">
                  <?php the_excerpt() ?>
                </div>
                <a href="<?php the_permalink() ?>" class="journal-feature_btn"
                  >Read more &rsaquo;</a
                >
              </div>
            </div>
          </article>
