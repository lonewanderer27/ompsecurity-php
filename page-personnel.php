<?php
get_header();
?>

<body>
  <main class="py-2 px-2 py-sm-3 px-sm-5"
        style="
			background: url(<?php echo get_template_directory_uri() . '/assets/images/background/2021-02-16-upscaled.jpg' ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);
		">

    <?php get_template_part("template-parts/navbar"); ?>

    <?php get_field("board_directors") ?>
    <div class="main-content mx-3 my-3">
      <div class="executives">
        <h1 class="h1">Executives</h1>
        <div class="row py-3">
          <?php while(have_rows("board_directors")): the_row();
              $name = get_sub_field('name');
              $position = get_sub_field('position');
              $image = get_sub_field('image');
              ?>
          <div class="col">
            <div class="person">
              <div style="
                    background-image: url('<?php echo (!empty($image)) ? $image : bloginfo('template_directory') . "/assets/images/employees/personnel/blank.png" ?>');
                  "
                   class="personnelImg"></div>
              <div class="personnelInfo">
                <span class="name text-uppercase"><?= $name ?></span>
                <span class="role"><?= $position ?></span>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="personnel">
        <h1 class="h1">Personnel</h1>
        <div class="row py-3">
          <?php while(have_rows("key_personnel")): the_row();
              $name = get_sub_field('name');
              $position = get_sub_field('position');
              $image = get_sub_field('image');
              ?>
          <div class="col">
            <div class="person">
              <div style="
                    background-image: url('<?php echo (!empty($image)) ? $image : bloginfo('template_directory') . "/assets/images/employees/personnel/blank.png" ?>');
                  "
                   class="personnelImg"></div>
              <div class="personnelInfo">
                <span class="name text-uppercase"><?= $name ?></span>
                <span class="role"><?= $position ?></span>
              </div>
            </div>
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