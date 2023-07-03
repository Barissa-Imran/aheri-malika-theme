<footer>
      <section class="action-container">
        <form action="" method="post">
          <p class="action-header">Subscribe</p>
          <input type="email" placeholder="ENTER YOUR EMAIL ADDRESS" />
          <button type="submit">SUBMIT</button>
        </form>
      </section>
      <section class="footer-links">
        <div class="footer-primary row">
          <a href="<?php echo get_home_url(); ?>" class="col">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/aheri_logo_dark.png"
              alt="Aheri Logo"
              title="AHERI HOME"
              class="img-fluid"
            />
          </a>
          <div class="col">
            <h3 class="footer-header">Reach Us</h3>
            <a href="mailto:aheri@cisskisumu.org">EMAIL: aheri@cisskisumu.org</a><br />
            <a href="tel:+254704382897">CALL US: +254704382897</a><br />
            <a href="#Contact">SEND MAIL: KISUMU</a><br />
            <a href="#">LOCATION: KISUMU</a>
          </div>
          <div class="col">
            <h3 class="footer-header">Navigate</h3>
            <?php

            wp_nav_menu(
                array(
                    'theme_location' => 'footer',
                    'container' => 'ul',
                    'container_class' => 'aheri__navbar-links',
                    'items_wrap' => '<ul id="" class="list-unstyled">%3$s</ul>',
                )
            );

          ?>
          </div>
        </div>
        <div class="footer-copy">
          <p class="copyright">
            <?php
            // get current year
            $year = date("Y");

            ?>
            <?=$year ?> &copy; African Higher Education Research Intitute | Crafted by
            <a href="https://github.com/Barissa-Imran">Barrylabs</a>.
          </p>
        </div>
      </section>
    </footer>

    <?php
    wp_footer();
    ?>

  </body>
</html>

