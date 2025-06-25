<?php
/* Template Name: Products */
get_header(); ?>

<section class="bg-white py-16 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <h1 class="text-4xl font-extrabold text-gray-900 text-center mb-8">Corrim Products</h1>
    <p class="text-center max-w-3xl mx-auto text-gray-600 text-lg mb-12">
      Corrim manufactures corrosion-immune fiberglass doors, frames, louvers, and windows to meet the highest performance standards across industries. All products are custom-built in the USA with your application in mind.
    </p>

    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      
      <!-- FRP Doors -->
      <div class="bg-gray-50 p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-blue-700 mb-2">FRP Doors</h2>
        <p class="text-gray-700 mb-4">Standard and specialty fiberglass doors for lab, institutional, and commercial use. Options include balsa, urethane, honeycomb, and mineral cores.</p>
        <a href="<?php echo get_template_directory_uri(); ?>/docs/FRP-Doors-2023.pdf" class="text-sm text-blue-600 hover:underline" target="_blank">Download Spec Sheet →</a>
      </div>

      <!-- FRP Frames -->
      <div class="bg-gray-50 p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-blue-700 mb-2">FRP Frames</h2>
        <p class="text-gray-700 mb-4">Corrosion-immune pultruded fiberglass frames. Field-assembled or factory-bonded miters. Full anchor options for new or existing wall types.</p>
        <a href="<?php echo get_template_directory_uri(); ?>/docs/FRP-Frames-2023.pdf" class="text-sm text-blue-600 hover:underline" target="_blank">Download Spec Sheet →</a>
      </div>

      <!-- Fixed Window Frames -->
      <div class="bg-gray-50 p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-blue-700 mb-2">Fixed Window Frames</h2>
        <p class="text-gray-700 mb-4">Factory mitered FRP window systems with glazing tape and stops included. Designed for institutional environments. Glass by others.</p>
        <a href="<?php echo get_template_directory_uri(); ?>/docs/Corrim-FRP-Fixed-Window-Frame-Fact-Sheet.pdf" class="text-sm text-blue-600 hover:underline" target="_blank">Download Spec Sheet →</a>
      </div>

      <!-- Wall Louvers -->
      <div class="bg-gray-50 p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-blue-700 mb-2">Fixed Wall Louvers</h2>
        <p class="text-gray-700 mb-4">FRP louvers with resin-bonded slats, mitered frames, and bird/bug screen options. Available up to 3' wide or with mullion support.</p>
        <a href="<?php echo get_template_directory_uri(); ?>/docs/Corrim-FRP-Fixed-Wall-Louvers-Fact-Sheet.pdf" class="text-sm text-blue-600 hover:underline" target="_blank">Download Spec Sheet →</a>
      </div>

      <!-- Fire-Rated Doors (PolyFire) -->
      <div class="bg-gray-50 p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-blue-700 mb-2">Fire-Rated FRP Doors</h2>
        <p class="text-gray-700 mb-4">UL 20–90 minute FRP fire doors with mineral core, intumescent seals, and UL-listed glazing. Available in singles or pairs.</p>
        <a href="<?php echo get_template_directory_uri(); ?>/docs/Corrim-Polyfire-Fact-Sheet.pdf" class="text-sm text-blue-600 hover:underline" target="_blank">Download Spec Sheet →</a>
      </div>

      <!-- STC Sound Doors -->
      <div class="bg-gray-50 p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-blue-700 mb-2">STC Sound Doors</h2>
        <p class="text-gray-700 mb-4">STC 45-rated sound doors with complete gasket packages and tested in accordance with ASTM E90 & E413.</p>
        <a href="<?php echo get_template_directory_uri(); ?>/docs/STC-Fact-Sheet-9023.pdf" class="text-sm text-blue-600 hover:underline" target="_blank">Download Spec Sheet →</a>
      </div>

      <!-- Florida Building Code (FBC) Approved -->
      <div class="bg-gray-50 p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-blue-700 mb-2">FBC / Hurricane Rated</h2>
        <p class="text-gray-700 mb-4">FBC-approved FRP doors and frames meet HVHZ and ±70 PSF requirements with specific core and hardware configs.</p>
        <a href="<?php echo get_template_directory_uri(); ?>/docs/Florida-Building-Code-2023.pdf" class="text-sm text-blue-600 hover:underline" target="_blank">Download Spec Sheet →</a>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
