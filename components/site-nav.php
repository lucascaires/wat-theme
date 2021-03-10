<script>
  function nav () {
    return {
      searchOpened: false,
      navOpened: false
    }
	}
</script>

<section x-data="nav()" x-init="$watch('searchOpened', value => value && setTimeout(() => document.querySelector('#s').focus(),200))" class="relative">
<nav class="flex space-x-5 px-2 md:px-0 w-full justify-between md:justify-end mt-10 md:mt-0 ">
    <button class="bg-gray-900 text-white focus:outline-none focus:bg-gray-600 p-2 rounded-lg md:hidden" @click="navOpened = !navOpened">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </button>
    <div class="hidden items-center md:flex space-x-5 px-2 md:px-0">
    <?php
      $nav = get_menu_by_location('primary');
      foreach ($nav as $link) {
        echo '<a class="bg-purple-500 rounded-lg hover:shadow hover:bg-purple-600 font-bold lg:text-base px-4 py-2 text-sm text-white uppercase" href="' . $link->url . '">' . $link->title . '</a>';
      }
    ?>
    </div>
    <button class="md:border-l pl-5 focus:outline-none hover:text-purple-600" @click="searchOpened = ! searchOpened">
      <svg x-show="!searchOpened" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
      <svg x-show="searchOpened" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
    <div x-show="searchOpened"
      class="absolute right-0 top-0 right-10 w-auto bg-gray-100 shadow rounded-md z-20"
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 transform scale-90"
      x-transition:enter-end="opacity-100 transform scale-100"
      x-transition:leave="transition ease-in duration-100"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"      
    >
      <form role="search" method="get" action="<?php echo esc_url(home_url('/')) ?>">
        <div class="flex bg-white border rounded-sm justify-between">
          <input type="search" class="p-2 focus:outline-none w-64" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Digite algo para buscar...">
          <button type="submit" class="text-gray-600 px-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          </button>					
        </div>
      </form>
    </div>
  </nav>
  <div x-show="navOpened" class="bg-gray-200 flex flex-col w-full space-y-1 md:hidden mt-4">
  <?php
    foreach ($nav as $link) {
        echo '<a class="border-b p-4 border-gray-400 uppercase text-sm lg:text-base font-bold text-gray-600 hover:text-purple-500" href="' . $link->url . '">' . $link->title . '</a>';
    }
  ?>
  </div>
</section>