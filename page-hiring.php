<?php
get_header();
?>

<body>
  <main class="py-2 px-2 py-sm-3 px-sm-5"
        style="background: url(<?= get_template_directory_uri() . "/assets/images/background/2022-02-16-wide-upscaled.jpg" ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);">

    <?php get_template_part("template-parts/navbar"); ?>

    <div class="main-content mx-3 my-3">
      <div class="hiring">
        <div class="row py-3">
          <div class="col-12 col-lg-8">

            <?php $hiring = get_field("hiring"); ?>
            <aside>
              <h1 class="h1">
                <?= $hiring["title"]; ?>
                <!-- Job Openings -->
              </h1>
              <p class="p">
                <?php if(have_rows("job_openings")) : ?>
                <?= $hiring["description"]; ?>
                <?php else : ?>
                <?= $hiring["no_hiring_message"] ?>
                <?php endif; ?>
                <!-- If you are qualified for the open position, please fill up the
                job application form below. -->
              </p>
              <?php if(have_rows("job_openings")) : ?>
              <?php $job_openings = get_field("job_openings"); ?>
              <div id="job-openings"
                   class="carousel slide carousel-dark"
                   data-bs-ride="true">
                <div class="carousel-indicators">
                  <?php $index = 0;
                  foreach($job_openings as $job_opening) : ?>
                  <?php if (!empty($job_opening["image"])) : ?>
                  <button type="button"
                          data-bs-target="#job-openings"
                          data-bs-slide-to="<?= $index ?>"
                          class="<?php $index == 0 ? "active" : "" ?>"
                          aria-current="true"
                          aria-label="Slide <?= $index + 1 ?>"></button>
                  <?php endif; ?>
                  <?php $index++; endforeach; ?>
                </div>
                <div class="carousel-inner">
                  <?php foreach($job_openings as $job_opening) : ?>
                  <?php if (!empty($job_opening["image"])) : ?>
                  <div class="carousel-item active">
                    <img src="<?= $job_opening["image"] ?>"
                         class="d-block w-100" />
                  </div>
                  <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              </div>
              <?php endif; ?>
            </aside>

            <?php if(have_rows("job_openings")) : ?>
            <aside class="py-5">
              <h1 class="h1">Job Application Form</h1>
              <?php echo do_shortcode('[contact-form-7 id="755" title="Job Application Form"]'); ?>
            </aside>
            <?php endif; ?>

          </div>
          <div class="col-12 col-lg-4">
            <aside id="contact-sidebar"
                   class="">
              <div class="mb-3">
                <?php $hr_contact = get_field("hr_contact"); ?>
                <h4 class="h4 text-uppercase text-white">
                  <!-- HR Department Contact: -->
                  <?= $hr_contact["title"] ?>
                </h4>
                <hr />
                <table>
                  <tbody>
                    <tr>
                      <td class="text-center">
                        <p class="p">
                          <span class="text-uppercase fw-bold">Tel. Number:</span><br />
                          <span>
                            <!-- 8877 - 8676 -->
                            <?= $hr_contact["tel_number"] ?>
                          </span>
                        </p>
                        <p class="p">
                          <span class="text-uppercase fw-bold">Fax:</span><br />
                          <span>
                            <!-- 8877 - 8677 -->
                            <?= $hr_contact["fax"] ?>
                          </span>
                        </p>
                      </td>
                      <td class="text-center">
                        <p class="p text-uppercase">
                          <span class="text-uppercase fw-bold">Mobile Numbers:</span>
                          <?php $mobile_numbers = $hr_contact["mobile_numbers"]; ?>
                          <?php foreach($mobile_numbers as $mobile_number) : ?>
                          <br />
                          <span
                                class="mobile-num"><?= $mobile_number["mobile_number"] ?></span>
                          <?php endforeach; ?>
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="mb-4">
                <div class="accordion"
                     id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header"
                        id="headingOne">
                      <button class="accordion-button"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseOne"
                              aria-expanded="true"
                              aria-controls="collapseOne">
                        Email Addresses
                      </button>
                    </h2>
                    <div id="collapseOne"
                         class="accordion-collapse collapse show"
                         aria-labelledby="headingOne">
                      <div class="accordion-body d-flex flex-column justify-content-center">
                        <?php $hr_department_emails = $hr_contact["hr_department_emails"]; ?>
                        <?php foreach($hr_department_emails as $hr_department_email) : ?>
                        <span
                              class="email-toggle"><?= $hr_department_email["email"] ?></span>
                        <!-- <span class="email-toggle">hr@ompsecurity.com</span> -->
                        <!-- <span class="email-toggle">ompsec@gmail.com</span> -->
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <?php get_template_part("template-parts/contact", "our_location"); ?>
                <!-- <h4 class="h4 text-uppercase text-white">Our Location:</h4>
                <hr />
                <p class="p">
                  3877 Gen. Macabulos Corner Evangelista Sts., Brgy., Bangkal,
                  Makati City
                </p> -->
              </div>
              <div class="mb-4">
                <?php get_template_part("template-parts/contact", "office_hours"); ?>
                <!-- <h4 class="h4 text-uppercase text-white">Office Hours:</h4>
                <hr />
                <div class="d-flex justify-content-between">
                  <span class="p">Monday - Saturday:</span>
                  <span class="p">8AM - 5PM</span>
                </div>
                <div class="d-flex justify-content-between">
                  <span class="p">Sunday:</span>
                  <span class="p">Closed</span>
                </div> -->
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script>
    let applicantJobPosition = document.getElementById('applicantJobPosition');
  </script>

  <?php while (have_rows('job_openings')) : the_row();
      //vars
      $position = get_sub_field('position');
      ?>
  <script>
    applicantJobPosition.options.add(new Option("<?php echo $position; ?>",
      "<?php echo $position; ?>"));
  </script>
  <?php endwhile; ?>

  <?php get_template_part("template-parts/contact", "email_popover") ?>

  <?php get_template_part("template-parts/footer", "copyright") ?>
  <?php wp_footer(); ?>

</body>