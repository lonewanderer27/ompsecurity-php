<?php 
  function get_post_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
  
    if(empty($first_img)){ // Defines a default image
      $first_img = bloginfo('template_directory') . "/assets/images/announcements/preview.jpg";
    }
    return $first_img;
  }
?>