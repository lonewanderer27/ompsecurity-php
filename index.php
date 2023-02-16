<?php
include "utils.php";
get_header();
?>

<body>
  <main class="py-2 py-sm-3 px-sm-5"
        style="
			background: url(<?php echo get_template_directory_uri() . '/assets/images/background/2021-02-16-upscaled.jpg' ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);
    ">
    <?php get_template_part("template-parts/navbar") ?>
    <div class="main-content d-flex align-items-center justify-content-center mx-3 my-3 h-75 flex-column">
      <div class="mx-3 my-3 w-100 d-flex flex-column justify-content-center align-items-center">
        <?php get_template_part("template-parts/announcements", "carousel"); ?>
      </div>
    </div>
  </main>

  <?php if (have_posts()) : ?>
  <section id="all-announcements"
           class="py-2 px-2 py-sm-3 px-sm-5"
           style="
			background: url(<?php echo get_template_directory_uri() . '/assets/images/announcements/preview.jpg' ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);
    ">
    <div class="mx-3 my-3 w-100 d-flex flex-column justify-content-center align-items-center">
      <div class="row w-100">
        <div class="col">
          <h1 class="section-title">All Announcements</h1>
        </div>
      </div>
      <div class="row gy-3 w-100">
        <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="card w-100">
            <div class="ratio ratio-16x9">
              <img src="<?php echo (has_post_thumbnail()) ? the_post_thumbnail('thumbnail') : get_post_image(); ?>"
                   class="card-img-top"
                   style="object-fit: cover" />
            </div>
            <div class="card-body">
              <h5 class="card-title">
                <?= the_title(); ?>
              </h5>
              <p class="card-text">
                <?= ucfirst(strtolower(get_the_excerpt())) ?>
              </p>
              <a href="<?= the_permalink() ?>"
                 class="btn btn-dark btn-sm text-uppercase">Read More</a>
            </div>
            <div class="card-footer text-muted">
              <?= get_the_date(); ?> at
              <?= the_time(); ?>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php the_posts_pagination(); ?>
        <!-- <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="card w-100">
            <img src="/assets/images/announcements/preview.jpg"
                 class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">
                Submission of Monthly Disposition Report (MDR)
              </h5>
              <p class="card-text">
                The submission of the MDR shall not be later than 15th day of
                the month for the previous month's report,...
              </p>
              <a href="#"
                 class="btn btn-dark btn-sm text-uppercase">Read More</a>
            </div>
            <div class="card-footer text-muted">
              Posted May 18, 2022 at 5:10 PM
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="card w-100">
            <img src="/assets/images/announcements/preview.jpg"
                 class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">
                Submission of Monthly Disposition Report (MDR)
              </h5>
              <p class="card-text">
                The submission of the MDR shall not be later than 15th day of
                the month for the previous month's report,...
              </p>
              <a href="#"
                 class="btn btn-dark btn-sm text-uppercase">Read More</a>
            </div>
            <div class="card-footer text-muted">
              Posted May 18, 2022 at 5:10 PM
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="card w-100">
            <img src="/assets/images/announcements/preview.jpg"
                 class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">
                Submission of Monthly Disposition Report (MDR)
              </h5>
              <p class="card-text">
                The submission of the MDR shall not be later than 15th day of
                the month for the previous month's report,...
              </p>
              <a href="#"
                 class="btn btn-dark text-uppercase">Read More</a>
            </div>
            <div class="card-footer text-muted">
              Posted May 18, 2022 at 5:10 PM
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <?php endif; ?>

  <section id="facebook-embeds"
           class="py-2 px-2 py-sm-3 px-sm-5"
           style="
			background: url(<?php echo get_template_directory_uri() . '/assets/images/announcements/facebook-logo-wallpaper.jpg' ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);
    ">
    <div class="mx-3 my-3 w-100 d-flex flex-column justify-content-center align-items-center">
      <div class="row w-100">
        <div class="col">
          <h1 class="section-title">FB Page</h1>
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100065139935017&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=646512459718864"
                  target="_top"
                  width="340"
                  height="500"
                  style="border: none; overflow: hidden"
                  scrolling="no"
                  frameborder="0"
                  allowfullscreen="true"
                  allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
        <div class="col">
          <h1 class="section-title">FB Group</h1>
          <iframe src="https://widgets.sociablekit.com/facebook-group-posts/iframe/110491"
                  frameborder="0"
                  width="500"
                  height="500"
                  frameborder="0"
                  style="border: none; overflow: hidden"></iframe>
        </div>
        <div class="col"></div>
      </div>
      <div class="row w-100"></div>
    </div>
  </section>

  <?php get_template_part("template-parts/contact") ?>

  <?php get_template_part("template-parts/footer", "copyright") ?>
  <?php wp_footer(); ?>
</body>