<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="bg-[#0d3b66] text-white shadow-md relative">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
    <!-- Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-3">
      <img src="<?php echo get_template_directory_uri(); ?>/site_assets/corrim_logo_one.webp"
           alt="Corrim Logo"
           class="h-10 w-auto bg-white rounded-full p-[2px] shadow-md border border-gray-200 object-contain" />
    </a>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex space-x-6 font-semibold">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'items_wrap' => '%3$s',
        'fallback_cb' => false,
        'depth' => 1,
        'walker' => new class extends Walker_Nav_Menu {
          function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
            $output .= '<a href="' . esc_url($item->url) . '" class="hover:text-yellow-300 transition">' . esc_html($item->title) . '</a>';
          }
        }
      ));
      ?>
    </nav>

    <!-- Mobile Menu Button -->
    <button id="mobileMenuToggle" class="md:hidden focus:outline-none">
      <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu"
       class="fixed inset-0 z-50 bg-[#0d3b66] text-white transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
    <div class="p-6 space-y-4">
      <button id="mobileMenuClose" class="text-right w-full text-xl font-bold">×</button>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'items_wrap' => '%3$s',
        'fallback_cb' => false,
        'depth' => 1,
        'walker' => new class extends Walker_Nav_Menu {
          function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
            $output .= '<a href="' . esc_url($item->url) . '" class="block py-2 text-lg border-b border-white/20 hover:text-yellow-300 transition">' . esc_html($item->title) . '</a>';
          }
        }
      ));
      ?>
    </div>
  </div>

  <script>
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuClose = document.getElementById('mobileMenuClose');

    mobileMenuToggle.addEventListener('click', () => {
      mobileMenu.classList.remove('translate-x-full');
    });

    mobileMenuClose.addEventListener('click', () => {
      mobileMenu.classList.add('translate-x-full');
    });
  </script>
</header>
