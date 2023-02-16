<?php get_header(); ?>

<body>
  <main class="py-2 px-2 py-sm-3 px-sm-5"
        style="background: url(<?php echo get_template_directory_uri() . '/assets/images/background/2021-02-16-upscaled.jpg' ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);">
    <?php get_template_part("template-parts/navbar") ?>

    <div class="main-content d-flex align-items-center justify-content-center mx-3 my-3 h-75 flex-column">
      <h1 class="h0 text-uppercase text-center">
        404 Error. PAGE NOT FOUND
      </h1>
      <p class="text-white">
        Sorry, the page you were looking for doesn't exist or has been deleted by the user. Click the button below to go
        home.
      </p>
      <a type="button"
         class="btn btn-warning text-uppercase btn-lg mt-5"
         href="/">
        GO BACK HOME
      </a>
    </div>
  </main>

  <?php get_template_part("template-parts/contact") ?>

  <?php get_template_part("template-parts/footer", "copyright") ?>
  <?php wp_footer(); ?>
</body>