<?php
// the query
$the_query = new WP_Query(array(
    'category_name' => 'Announcements',     # get the posts from Announcements category
    'posts_per_page' => 3,                  # temporarily set the amount of posts per page to 3
));
?>

<?php if ($the_query->have_posts()) : ?>
<div id="announcementCarousel"
     class="carousel slide w-100 mb-3 mt-5 text-center">
  <div class="carousel-inner">
    <?php
                    $post_count = 0;
    while ($the_query->have_posts()) : $the_query->the_post();
        $post_count++;
        ?>
    <div
         class='carousel-item <?= $post_count == 1 ? "active" : "" ?>'>
      <div class="row">
        <div class="col-12 col-lg-6 d-flex justify-content-center align-content-center">
          <div id="announcementImage<?= $post_count ?>"
               class="w-100 h-auto"
               style="
                  	background-image: url(<?php echo (has_post_thumbnail()) ? the_post_thumbnail('thumbnail') : get_post_image(); ?>);
									">
          </div>

        </div>
        <div class="col-12 col-lg-6">
          <div id="announcementContent1"
               class="d-flex flex-column justify-content-evenly align-items-center h-100">
            <span class="fs-3 s-font announcement-title text-white my-3">
              <?= the_title(); ?>
            </span>
            <p class="p">
              <span class="p">
                <?= ucfirst(strtolower(get_the_excerpt())) ?>
              </span>
              <span class="text-decoration-underline text-white read-more"
                    onclick="window.open('<?= the_permalink() ?>')"
                    title="Open Announcement on New Tab">
                Read More →
              </span>
              <br />
            <p class="p fw-bold"><?= get_the_date(); ?> at
              <?= the_time(); ?>
            </p>
            <a type="button"
               class="btn btn-light text-uppercase btn-lg mt-5"
               href="announcements#all-announcements">
              VIEW MORE ANNOUNCEMENTS
            </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
  <div class="carousel-indicators position-relative mt-5">
    <?php
            $post_count = 0;
    while ($the_query->have_posts()) : $the_query->the_post();
        $post_count++;
        ?>
    <button type="button"
            data-bs-target="#announcementCarousel"
            data-bs-slide-to="<?= $post_count - 1 ?>"
            <?php if ($post_count == 1) : ?>
      class="active"
      aria-current="true"
      <?php endif; ?>
      aria-label="Slide <?= $post_count - 1 ?>">
    </button>
    <?php endwhile; ?>
  </div>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); // reset the amount of posts per to user settings?>