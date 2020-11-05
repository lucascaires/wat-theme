<?php get_header(); ?>

<section class="h-screen flex items-center justify-center bg-gray-800">
  <h1 class="uppercase font-light text-gray-800 bg-white p-20 text-2xl rounded-lg">
    WordPress + Alpine.js + Tailwind
  </h1>
  <div x-data="{ open: false }">
    <button @click="open = true">Open Dropdown</button>

    <ul
        x-show="open"
        @click.away="open = false"
    >
        Dropdown Body
    </ul>
</div>
</section>

<?php get_footer(); ?>

