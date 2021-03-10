<div class="flex space-x-2 text-purple-500">
<?php

  $pagination =  paginate_links(array(
    'type' => 'array',
    'prev_text' => '&laquo;',
    'next_text' => '&raquo;'
  ));

  foreach ($pagination as $key => $page_link) {
      $anchorClass = 'flex items-center justify-center h-10 w-10 rounded shadow bg-purple-200';
      $activeClass = ' bg-purple-900 text-purple-200';
      $dotsClass = 'flex items-center justify-center h-10 w-10 bg-white';
      echo str_replace(
          [' current', 'page-numbers', $anchorClass . ' dots'],
          [$activeClass, $anchorClass, $dotsClass],
          $page_link
      );
  }
?>
</div>