<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <?php
    wp_head();
    ?>

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/favicon-16x16.png"
    />
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/site.webmanifest" />
    <link rel="preload" as="image" onload="this.rel = 'image'" href="<?php echo get_template_directory_uri(); ?>/assets/images/home/heroimage1.png" />
    <!--

                                    - .=.-.-:-.-..
                            . -.=:.-=+.= -:+:=:+==  *==.-:
                        .-:-=.=:-::.               ..::+:: =-
                      --.=:=...                        .: ==:-+:
                   :  :+:.         .                        :-:::=:
                  +-=:   .:..:::...::.:                        ::+ --
               :=- =    :. :::::::..+ -. .....    ..             .:=:-.
              .=-=-   :: .:          .---=:=---=++-.:              ::- +
            .:=-.   :: ::.               ..      +. =                :--=
           -::+    - :-                          :- :.                 .+-
          :-=-:   ::-.                            :- ..                  .-:
          --=:    --.                              := .:                .--+.
         :=-      .                                  =. -                 +--.
         .:.     =-.                                  -- :.  ...:.        -:++
        -=-      .--:.                                 .=:.:.::: -         : .=
       :..=        .=::  .:::::.    .                     ::::+.-          :::=
       -::-         ::---:::::: .....-                      :-:-           .::-.
       :::.                    :::+ -                     :---.             ::=:
       ===                        =::                    ---               .=--.
       ---.                       ::                   .==:                .-::
       =-=:                         ==:                :-                  :::=
        .--                          -=-               :-:                 -::-
        -:-.                         .=:               =. -               :.=:-
                                     = -              .=  :
             ...                    .= -            ::.::.
               .....                 = :           +-=:        .
          ..      ..::..  .:.        .= -         -: -      .::.  ...       .....
          ........    .:-:. .:-.      =..-       :: -     :-:  .::.    ..::.....
              ...::::..  .:--..:-:     -: .:     = -.  .--..:::.  .::::::..
                   ..::--::. .--:.:-.   :- =..:-::-  :-..::. .::--::.
                         .::--:..::::::  :---=-:.  .:.....:--:..
                               .:::::...          ..:::::.
                                     ..
                                            ..                 .
                          -##     .%.:%.    +#==:    =*=#:    =%.
                         :#=#=    .%-=%.    +#--.    -*+#.    =%.
                         :.  :     :  :     .:::.    .: ::    .-



        If you're reading this, visit the deloper's github and give them a follow.

        https://github.com/Barissa-Imran
     -->

  </head>
  <body class="">
    <header>
      <?php
      // Display active event
      if (function_exists('malika_events_display_active_event')) {
          malika_events_display_active_event();

      }
      ?>
        <nav class="aheri__navbar">
          <div>
            <?php
            if(function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>
            <a href="<?php echo get_home_url(); ?>" class="aheri__navbar-logo" title="AHERI Home">
              <img
                class=""
                src="<?= $logo[0] ?>"
                alt="Aheri logo"
              />
            </a>
          </div>
          <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container' => 'ul',
                    'container_class' => 'aheri__navbar-links',
                    'items_wrap' => '<ul id="" class="aheri__navbar-links">%3$s</ul>',
                )
            );

          ?>
          <div class="aheri__navbar-involved">
            <a href="
            <?php
            echo get_post_type_archive_link('malika_event');
            ?>"
            title="Events">
              <i class="bi bi-calendar-event"></i>
              Events
            </a>
          </div>

          <div class="aheri__navbar-smallscreen">
            <button id="menuButton" type="button">
              <i class="bi bi-list"></i>
            </button>

            <div
              id="overlay"
              class="aheri__navbar-smallscreen_overlay collapse flex__center slide-bottom"
            >
              <button
                id="closeButton"
                class="overlay_close"
                type="button"
                onclick=""
              >
                <i class="bi bi-x-lg"></i>
              </button>
              <?php

              $link = get_post_type_archive_link('malika_event');

              wp_nav_menu(
                array(
                  'theme_location' => 'primary',
                  'container' => 'ul',
                  'container_class' => 'aheri__navbar-smallscreen_links',
                  'items_wrap' => '
            <ul id="menuLink" class="aheri__navbar-smallscreen_links">
              <li>
                <a href="'.$link.'" title="Events">
                <i class="bi bi-calendar-event"></i>
                  Events
                </a>
            </li>
            %3$s
          </ul>',
            )
          );
          ?>
            </div>
          </div>
        </nav>
    </header>
