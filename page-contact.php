<?php
get_header();
?>

<body>
  <main class="py-2 px-2 py-sm-3 px-sm-5"
        style="background: url(<?= get_template_directory_uri() . "/assets/images/background/2022-02-16-wide-upscaled.jpg" ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);">

    <?php get_template_part("template-parts/navbar"); ?>

    <div class="main-content mx-3 my-3">
      <div class="contact-us">
        <div class="row py-3">
          <div class="col-12 col-lg-8">

            <aside>
              <?php get_template_part("template-parts/contact", "our_location") ?>
              <iframe id="gmap_canvas"
                      class="embed-responsive-item"
                      src="https://maps.google.com/maps?q=3877%20Gen.%20Macabulos%20Corner%20Evangelista%20Sts.,%20Brgy.,%20Bangkal,%20Makati%20City&t=&z=16&ie=UTF8&iwloc=&output=embed"
                      scrolling="no"></iframe>
            </aside>

            <aside class="py-5">
              <h1 class="h1">Contact Us Form</h1>
              <?php echo do_shortcode('[contact-form-7 id="745" title="Contact Us"]'); ?>
            </aside>

          </div>
          <div class="col-12 col-lg-4">
            <aside id="contact-sidebar">
              <div class="mb-5">
                <?php get_template_part("template-parts/contact", "about_us") ?>
              </div>
              <div class="mb-3">
                <?php get_template_part("template-parts/contact", "numbers") ?>
              </div>
              <div class="mb-3">
                <?php get_template_part("template-parts/contact", "emails_accordion") ?>
              </div>
              <div class="mb-3">
                <?php get_template_part("template-parts/contact", "office_hours") ?>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php get_template_part("template-parts/contact", "email_popover") ?>

  <?php get_template_part("template-parts/footer", "copyright") ?>
  <?php wp_footer(); ?>

</body>