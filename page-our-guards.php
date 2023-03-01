<?php
get_header()
?>

<body>
  <main class="py-2 px-2 py-sm-3 px-sm-5"
        style="
			background: url(<?php echo get_template_directory_uri() . '/assets/images/background/2021-02-16-upscaled.jpg' ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);
		">
    <?php get_template_part("template-parts/navbar"); ?>

    <div class="requirements mx-3 my-3">
      <div class="row py-3">
        <div class="col-12 col-sm-12 col-md-6">
          <h1 class="h1">Requirements</h1>
          <p class="p">
            <?= get_field("requirements") ?>
          </p>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
          <?php
            $uniform_images = get_field("uniform_images");
$uniform_img_1 = $uniform_images["uniform_image"];
$uniform_img_2 = $uniform_images["uniform_image_2"];
?>
          <div class="captioned-photo"
               style="
            background: url(<?= $uniform_img_2["image"] ?>)
          ">
            <div class="captioned-photo-footer">
              <span>
                <?= $uniform_img_2["description"] ?>
                <!-- Guards on duty are bound to maintain neat appearance,
                physically fit, with self-confidence and show pride in the
                service. -->
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row py-3">
        <div class="col-12 col-sm-12 col-lg-6">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
              <h5 class="h5">Ethical Standards</h5>
              <p class="p">
                <?= get_field("ethical_standards"); ?>
              </p>
              <!-- <p class="p">
                We strive to maintain the highest standards of corporate
                conduct as well as, personal and business ethics.
              </p>
              <p class="p">
                As an employee of this Agency, everyone is mandated to do the
                same. We carry out our daily activities in an ethical and
                legal manner avoiding possible conflicts of interest.
              </p> -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 text-center">
              <img src="<?= $uniform_img_1 ?>"
                   style="height: auto; width: 73%" />
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6">
          <div class="accordion"
               id="uniformSpecifications">
            <div class="accordion-item">
              <h2 class="accordion-header"
                  id="uS-headingOne">
                <button class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#uS-collapseOne"
                        aria-expanded="true"
                        aria-controls="uS-collapseOne">
                  Uniform Specifications
                </button>
              </h2>
              <div id="uS-collapseOne"
                   class="accordion-collapse collapse show"
                   aria-labelledby="uS-headingOne"
                   data-bs-parent="#uniformSpecifications">
                <div class="accordion-body">
                  <ul>
                    <?php
            while (have_rows("uniform_specifications")) : the_row();
                $bullet_item = get_sub_field("bullet_item");
                ?>
                    <li><?= $bullet_item ?></li>
                    <?php endwhile; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <section id="training"
           class="py-2 px-2 py-sm-3 px-sm-5"
           style="background: url(<?php echo get_template_directory_uri() . '/assets/images/our-guards/security-guards-training-upscaled.jpg' ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);">
    <div class="mx-3 my-3">
      <div class="training">
        <div class="row py-3">
          <div class="col-12 col-lg-6">
            <?php $training = get_field("training"); ?>
            <h1 class="h1">Training</h1>
            <p class="p">
              <?= $training["description"] ?>
              <!-- All ARSIA security personnel are required to go through regular
              and formal training at PNP-SOSIA and TESDA Accredited Centers to
              fully develop their know-how, knowledge and skills as a license
              security professionals. -->
            </p>

            <div class="accordion"
                 id="accordionExample">
              <?php $competency = $training["competency"];
$index = 0; ?>
              <?php foreach($competency as $competency_group) : ?>
              <div class="accordion-item">
                <h2 class="accordion-header"
                    id="heading<?= $index ?>">
                  <button class="accordion-button"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapse<?= $index ?>"
                          aria-expanded="<?= $index == 0 ? "true" : "false" ?>"
                          aria-controls="collapse<?= $index ?>">
                    <?= $competency_group["competency_title"] ?>
                  </button>
                </h2>
                <?php $competency_items = $competency_group["competency_items"]; ?>
                <div id="collapse<?= $index ?>"
                     class="accordion-collapse collapse show"
                     aria-labelledby="heading<?= $index ?>"
                     data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ul>
                      <?php foreach($competency_items as $competency_item) : ?>
                      <li>
                        <?= $competency_item["competency_item"] ?>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>
              <?php $index++; endforeach; ?>
            </div>
          </div>

          <div class="col-12 col-lg-6 text-center">
            <?php $training_images = get_field("training_images") ?>
            <div id="trainingCarousel"
                 class="carousel slide">

              <?php if (sizeof($training_images) > 1) : ?>
              <div class="carousel-indicators">
                <?php $index = 0 ?>
                <?php foreach($training_images as $training_image) : ?>
                <button type="button"
                        data-bs-target="#trainingCarousel"
                        data-bs-slide-to="<?= $index ?>"
                        class='<?= $index == 0 ? "active" : "" ?>'
                        aria-label="Slide <?= $index + 1 ?>"></button>
                <?php $index++; endforeach; ?>
              </div>
              <?php endif; ?>

              <div class="carousel-inner">
                <?php foreach($training_images as $training_image) : ?>
                <div class="carousel-item active">
                  <img
                       src="<?= $training_image["image"]; ?>" />
                  <div class="carousel-caption d-none d-md-block">
                    <h5>
                      <?= $training_image["title"]; ?>
                    </h5>
                    <p class="p">
                      <?= $training_image["description"]; ?>
                    </p>
                  </div>
                </div>
                <?php endforeach ?>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part("template-parts/contact") ?>

  <?php get_template_part("template-parts/footer", "copyright") ?>
  <?php wp_footer(); ?>
</body>