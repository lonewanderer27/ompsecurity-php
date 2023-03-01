<?php 
  get_header();
  the_post();
?>

<body>
  <main 
    class="py-2 px-2 py-sm-3 px-sm-5"
    style="background: url(<?= get_template_directory_uri() . "/assets/images/background/2022-02-16-wide-upscaled.jpg" ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);"  
  >
    <?php get_template_part("template-parts/navbar"); ?>

    <div class="main-content mx-3 my-3">
      <div class="contact-us">
        <div class="row py-3">
          <div class="col-12 col-lg-8 text-center text-white">

            <h1 class="h1"><?= the_title(); ?></h1>
            <p class="p fw-bold" id="smallDescription">Posted <?= the_date(); ?> at <?= the_time(); ?></p>

            <?= the_content(); ?> 
            <hr/>

            <?php get_template_part("template-parts/single", "post_buttons") ?>
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
    </div>
  </main>

  <?php get_template_part("template-parts/contact", "email_popover") ?>

  <?php get_template_part("template-parts/footer", "copyright") ?>
  <?php wp_footer(); ?>
</body>