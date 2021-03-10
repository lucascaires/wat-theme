<?php
  if (has_custom_logo()) {
    echo '<img class="h-12" src="' . get_custom_logo_src('medium') . '" />';
  } elseif ($blog_info = bloginfo('name')) {
    $link = '<a href="'. esc_url(home_url('/')) . '">' . bloginfo('name') . '</a>';
    echo (is_front_page() && is_home()) ? "<h1>$link</h1>" : "<p>$link</p>";
  }
?>