<?php
get_header();
?>

<body>
  <main class="py-2 px-2 py-sm-3 px-sm-5"
        style="
			background: url(<?php echo get_template_directory_uri() . '/assets/images/background/2021-02-16-upscaled.jpg' ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);
		">

    <?php get_template_part("template-parts/navbar") ?>

    <div class="main-content mx-3 my-3">
      <div class="service-delivery-and-operations">
        <div class="row py-3">
          <div class="col">
            <h1 class="h1">Service Delivery and Operations</h1>
            <p class="p">
              We accomplish efficient and effective operations through the
              following stages:
            </p>
            <?php $sdao = get_field('service_delivery_and_operations'); ?>
            <div class="row">
              <?php
                while(have_rows("service_stages")) : the_row();
                    $title = get_sub_field("title");
                    $icon = get_sub_field("icon");
                    ?>
              <div
                   class="col-12 col-sm-5 col-md-4 col-xl-2 d-flex text-center flex-column justify-content-evenly align-content-center">
                <i class="<?= $icon ?> my-3"
                   style="font-size: 60px; color: white"></i>
                <p class="p"><?= $title ?></p>
              </div>
              <?php endwhile; ?>
              <div
                   class="col-12 col-sm-5 col-md-4 col-xl-2 d-flex text-center flex-column justify-content-evenly align-content-center">
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <?php
            while(have_rows("service_operations")) : the_row();
                $title = get_sub_field("title");
                $description = get_sub_field("description");
                ?>
          <div class="col-12 col-md-6 col-xl-4 py-2">
            <h5 class="h5"><?= $title ?></h5>
            <p class="p">
              <?= $description ?>
            </p>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </main>

  <?php get_template_part("template-parts/contact") ?>

  <?php get_template_part("template-parts/footer", "copyright") ?>
  <?php wp_footer(); ?>
</body>