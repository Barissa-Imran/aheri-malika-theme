<?php
/*
Template Name: Contact Template
*/

get_header();

$address_icon = get_template_directory_uri() . "/assets/contact/Address_icon.svg";
$tel_icon = get_template_directory_uri() . "/assets/contact/tel_icon.svg";
$email_icon = get_template_directory_uri() . "/assets/contact/email_icon.svg";

?>
      <section class="contact-hero">
        <h2 class="contact-hero_heading">GET IN TOUCH</h2>
        <div class="contact-hero_info row mt-5">
          <div class="contact-hero_info-item col-md-4">
            <img src="<?= $address_icon ?>" alt="Address" />
            <p class="contact-hero_sub">ADDRESS</p>
            <p class="contact-hero_content">P.O Box 76 – 40100, Kisumu</p>
          </div>
          <div class="contact-hero_info-item phone col-md-4">
            <img src="<?= $tel_icon ?>" alt="telephone" />
            <p class="contact-hero_sub">PHONE</p>
            <a title="make call" class="phone" href="tel:+254572021635"
              >Tel: +254 57 2021635</a
            ><br />
            <a title="make call" class="phone" href="tel:+254704382897"
              >Mobile: +254 704 382897</a
            >
          </div>
          <div class="contact-hero_info-item col-md-4">
            <img src="<?= $email_icon ?>" alt="mail" />
            <p class="contact-hero_sub">EMAIL</p>
            <a title="send email" href="mailto:aheri@cisskisumu.org"
              >aheri@cisskisumu.org</a
            >
          </div>
        </div>
      </section>
      <section class="contact-content row">
        <div class="contact-message col-md-6">
          <h2 class="contact-message_heading">Message Us</h2>
          <p class="contact-message_text">
            Community Initiative Support Services. We would like to hear from
            you!
          </p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15959.239887612182!2d34.74386892015791!3d-0.11720976999034236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAheri%2C%20kisumu!5e0!3m2!1sen!2ske!4v1687301348917!5m2!1sen!2ske"
            width="100%"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <div class="contact-form col-md-6">
          <form action="" class="row g-1">
            <div class="col-6">
              <label for="firstName" class="contact_form-label">Name*</label>
              <input
                type="text"
                class="form-control"
                name="firstName"
                id=""
                required
              />
              <div id="firstNameHelp" class="form-text">First</div>
            </div>
            <div class="col-6">
              <label for="" class="contact_form-label invisible">.</label>
              <input type="text" class="form-control" name="lastName" id="" />
              <div id="firstNameHelp" class="form-text">Last</div>
            </div>
            <div class="col-6">
              <label for="email" class="contact_form-label">Email*</label>
              <input
                type="email"
                class="form-control"
                name="email"
                id=""
                required
              />
            </div>
            <div class="col-12">
              <label for="" class="contact_form-label">Message*</label>
              <textarea
                class="form-control"
                name=""
                id=""
                cols="30"
                rows="10"
                required
              ></textarea>
            </div>
            <div class="">
              <button class="btn contact-btn" type="submit">SUBMIT</button>
            </div>
          </form>
        </div>
      </section>

      <?php
      get_footer();
      ?>
