<?php 
$prev_post_link = get_previous_post_link('%link', '<span class="text-white"> %title </span>');
$next_post_link = get_next_post_link('%link', '<span class="text-white"> %title </span>')
?>

<div class="row align-items-center justify-content-center mt-5 mb-5">     
    <?php if (!empty($prev_post_link)) : ?>  
    <div class="col-6">
      <h4 class="h4 text-uppercase">Previous Post:</h4>
      <p class="p text-white"><?= $prev_post_link ?></p>
    </div>
    <?php endif; if (!empty($next_post_link)) : ?>
    <div class="col-6">
      <h4 class="h4 text-uppercase">Next Post:</h4>
      <p class="p text-white"><?= $next_post_link ?></p>
    </div>
    <?php endif; ?>

    <div class="text-center">
      <a type="button" class="btn btn-light text-uppercase btn-lg" 
          href="announcements#all-announcements">
        Go Back to Announcements
      </a>
    </div>
  </div>
</div>