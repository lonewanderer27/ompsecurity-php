<?php
include "utils.php";
get_header();
?>

<body>
	<main class="py-2 px-2 py-sm-3 px-sm-5"
		  style="
			background: url(<?php echo get_template_directory_uri() . '/assets/images/background/2021-02-16-upscaled.jpg' ?>), linear-gradient(140deg, #101010, #343c19, #676d20, #9d9f13);
		">
		<?php get_template_part("template-parts/navbar") ?>

		<?php $hero = get_field('hero'); ?>
		<div class="main-content d-flex align-items-center justify-content-center mx-3 my-3 h-75 flex-column">
			<h1 class="h0 text-uppercase text-center"
				id="bigDescription">
				<!-- Security & Investigation Agency, Inc. -->
				<?php echo $hero["big_description"] ?>
			</h1>
			<p class="text-white"
			   id="smallDescription">
				<!-- We help, guide, serve and protect our clients by providing
				comprehensive security services. -->
				<?php echo $hero["small_description"] ?>
			</p>
			<a type="button"
			   class="btn btn-warning text-uppercase btn-lg mt-5"
			   href="<?php echo $hero["button_link"] ?>">
				<!-- Get In Touch With Us -->
				<?php echo $hero["button_text"]; ?>
			</a>
		</div>
	</main>

	<section id="recent-announcements"
			 class="py-2 px-2 py-sm-3 px-sm-5"
			 style='
      background: url(<?php echo get_template_directory_uri() . "/assets/images/announcements/preview.jpg" ?>), linear-gradient(160deg, #101010, #343c19, #676d20, #9d9f13);
    '>
		<div class="mx-3 my-3 w-100 d-flex flex-column justify-content-center align-items-center">
			<h1 class="section-title">Recent Announcements</h1>
			<?php get_template_part("template-parts/announcements", "carousel"); ?>
		</div>
	</section>

	<?php $our_services = get_field("our_services") ?>
	<section id="our-services"
			 class="py-2 px-2 py-sm-3 px-sm-5">
		<div class="mx-3 my-3 w-100 d-flex flex-column justify-content-center align-items-center">
			<h1 class="section-title">Our Services</h1>
			<?php $svc_1 = $our_services["svc_1"] ?>
			<?php $svc_2 = $our_services["svc_2"] ?>
			<?php $svc_3 = $our_services["svc_3"] ?>
			<?php $svc_4 = $our_services["svc_4"] ?>
			<?php $svc_5 = $our_services["svc_5"] ?>
			<?php $svc_6 = $our_services["svc_6"] ?>
			<div class="w-100 row mx-0">
				<div class="col-12 col-lg-6 py-3">
					<div id="service1"
						 class="d-flex justify-content-center align-content-center px-2"
						 style="
              --service1_img_path: url(<?php echo get_template_directory_uri() . '/assets/images/services/guarding-and-security-related-services.jpg' ?>);
              background-position: 50% 5%;"
						 onclick="window.open('service-1')"
						 title="Open service-1">
						<span class="fs-3 s-font service-title">
							<!-- Guarding and Security Related Services -->
							<?php echo $svc_1["name"] ?>
						</span>
					</div>
				</div>
				<div class="col-12 col-lg-6 py-3">
					<div id="service2"
						 class="d-flex justify-content-center align-content-center px-2"
						 style="
                --service2_img_path: url(<?php echo get_template_directory_uri() . '/assets/images/services/security-training.jpg' ?>);
                background-position: center;
              "
						 onclick="window.open('service-2')"
						 title="Open service-2">
						<span class="fs-3 s-font service-title">
							<!-- Security Training -->
							<?php echo $svc_2["name"] ?>
						</span>
					</div>
				</div>
				<div class="col-12 col-lg-6 py-3">
					<div id="service3"
						 class="d-flex justify-content-center align-content-center px-2"
						 style="
                --service3_img_path: url(<?php echo get_template_directory_uri() . '/assets/images/services/vip-slash-executive-protection.jpg' ?>);
                background-position: 50% 30%;
              "
						 onclick="window.open('service-3')"
						 title="Open service-3">
						<span class="fs-3 s-font service-title">
							<!-- VIP / Executive Protection -->
							<?php echo $svc_3["name"] ?>
						</span>
					</div>
				</div>
				<div class="col-12 col-lg-6 py-3">
					<div id="service4"
						 class="d-flex justify-content-center align-content-center px-2"
						 style="
                --service4_img_path: url(<?php echo get_template_directory_uri() . '/assets/images/services/detective-and-investigation-service.jpg' ?>);
                background-position: center;
              "
						 onclick="window.open('service-4')"
						 title="Open service-4">
						<span class="fs-3 s-font service-title">
							<!-- Detective and Investigation Service -->
							<?php echo $svc_4["name"] ?>
						</span>
					</div>
				</div>
				<div class="col-12 col-lg-6 py-3">
					<div id="service5"
						 class="d-flex justify-content-center align-content-center px-2"
						 style="
                --service5_img_path: url(<?php echo get_template_directory_uri() . '/assets/images/services/security-audit-and-survey.jpg' ?>);
                background-position: 50% 35%;
              "
						 onclick="window.open('service-5')"
						 title="Open service-5">
						<span class="fs-3 s-font service-title">
							<!-- Security Audit and Survey -->
							<?php echo $svc_5["name"] ?>
						</span>
					</div>
				</div>
				<div class="col-12 col-lg-6 py-3">
					<div id="service6"
						 class="d-flex justify-content-center align-content-center px-2"
						 style="
                --service6_img_path: url(<?php echo get_template_directory_uri() . '/assets/images/services/k9-unit.jpg' ?>);
                background-position: 50% 25%;
              "
						 onclick="window.open('service-6')"
						 title="Open service-6">
						<span class="fs-3 s-font service-title">
							<!-- K-9 Unit -->
							<?php echo $svc_6["name"] ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php $department_emails = get_field("department_emails"); ?>
	<?php echo $department_emails ?>

	<?php get_template_part("template-parts/contact") ?>

	<?php get_template_part("template-parts/footer", "copyright") ?>
	<?php wp_footer(); ?>
</body>