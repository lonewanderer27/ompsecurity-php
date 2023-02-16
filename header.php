<?php
$template_directory = bloginfo('template_directory');
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>
    <?php if (is_404()) : ?>
    Page Not Found
    <?php elseif (is_home()) : ?>
    ANNOUNCEMENTS
    <?php else : ?>
    <?php echo get_the_title(); ?>
    <?php endif; ?>
    | <?= get_bloginfo("name") ?>
  </title>
  <?php if (has_site_icon()) : ?>
  <link rel="shortcut icon"
        type="image/x-icon"
        href="<?= site_icon_url() ?>">
  <?php else : ?>
  <link rel="shortcut icon"
        type="image/x-icon"
        href="<?= $template_directory ?>/assets/icons/favicon.ico">
  <?php endif; ?>
  <?php wp_head() ?>
</head>