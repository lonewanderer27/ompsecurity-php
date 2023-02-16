<?php
get_header();
?>

<body>
  <main class="py-2 px-2 py-sm-3 px-sm-5"
        style="
			background: url(<?php echo get_template_directory_uri() . '/assets/images/background/2021-02-16-upscaled.jpg' ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);
		">

    <?php get_template_part("template-parts/navbar"); ?>

    <div class="main-content mx-3 my-3">
      <div class="mission-vision">
        <?php
          $values = get_field('missionvision');
$mission = $values["mission"];
$vision = $values["vision"];
?>
        <div class="row py-3">
          <div class="col-12 col-md-6">
            <h1 class="h1">Mission</h1>
            <p class="p">
              <?= $mission ?>
            </p>
          </div>
          <div class="col-12 col-md-6">
            <h1 class="h1">Vision</h1>
            <p class="p">
              <?= $vision ?>
            </p>
          </div>
        </div>
        <div class="row py-3">
          <h1 class="h1">Core Values</h1>
          <?php while(have_rows("core_values")): the_row();
              $title = get_sub_field("title");
              $description = get_sub_field("description")
              ?>
          <div class="col-12 col-lg-6 col-xl-3 py-2">
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