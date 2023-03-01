<section id="contact"
         class="py-2 px-3 py-sm-3 px-sm-5 d-flex flex-col justify-content-center align-items-center">
  <div class="mx-3 my-3 w-100">
    <div class="row py-3">
      <div class="col-12 col-xl-6">
        <div class="text-center mb-5">
          <?php get_template_part("template-parts/contact", "about_us"); ?>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-6 col-xl-12">
            <div class="text-center mb-5">
              <?php get_template_part("template-parts/contact", "our_location"); ?>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-6 col-xl-12">
            <div class="text-center mb-5">
              <?php get_template_part("template-parts/contact", "office_hours"); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-6">
        <div class="text-center">
          <?php get_template_part("template-parts/contact", "numbers"); ?>
          <?php get_template_part("template-parts/contact", "emails"); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part("template-parts/contact", "email_popover") ?>