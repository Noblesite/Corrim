<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="bg-[#0d3b66] text-white shadow-md">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
    <!-- Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-3">
    <img src="<?php echo get_template_directory_uri(); ?>/site_assets/corrim_logo_one.webp"
        alt="Corrim Logo"
        class="h-10 w-auto bg-white rounded-full p-[2px] shadow-md border border-gray-200 object-contain" />
    </a>

    <!-- Navigation -->
    <nav class="hidden md:flex space-x-6 font-semibold">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'items_wrap' => '%3$s', // removes <ul>
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
  </div>
</header>
