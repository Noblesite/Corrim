<?php
/* Template Name: Resources */
get_header(); ?>

<section class="bg-white py-16 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <h1 class="text-4xl font-extrabold text-gray-900 text-center mb-8">Resources</h1>
    <p class="text-center max-w-3xl mx-auto text-gray-600 text-lg mb-12">
      Download specifications, installation guides, and technical documentation for Corrim fiberglass door systems.
    </p>

    <!-- Drawings & Specifications -->
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-blue-800 mb-4 border-b border-gray-200 pb-1">Drawings & Specifications</h2>
      <ul class="space-y-4">
        <?php
        $spec_files = [
          'CORRIM-Single-Narrow-Glass-Door-Frame.pdf',
          'Corrim-FRP-Doors-and-Frames-Guide-Specifications.pdf'
        ];
        foreach ($spec_files as $file) {
          echo "<li class=\"flex items-center justify-between p-4 bg-gray-50 rounded shadow\">";
          echo "<span>" . basename($file) . "</span>";
          echo "<a href='" . get_template_directory_uri() . "/docs/$file' class=\"text-blue-600 font-semibold hover:underline\" download>Download</a>";
          echo "</li>";
        }
        ?>
      </ul>
    </div>

    <!-- Installation & Maintenance -->
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-blue-800 mb-4 border-b border-gray-200 pb-1">Installation & Maintenance</h2>
      <ul class="space-y-4">
        <?php
        $install_files = [
          'Corrim-Installation-and-Maintenance-Guide.pdf',
          'CORRIM-How-To-Clean-An-FRP-Door-And-Frame.pdf',
          'CORRIM-Install-An-FRP-Door-Into-A-Frame.pdf'
        ];
        foreach ($install_files as $file) {
          echo "<li class=\"flex items-center justify-between p-4 bg-gray-50 rounded shadow\">";
          echo "<span>" . basename($file) . "</span>";
          echo "<a href='" . get_template_directory_uri() . "/docs/$file' class=\"text-blue-600 font-semibold hover:underline\" download>Download</a>";
          echo "</li>";
        }
        ?>
      </ul>
    </div>

    <!-- Technical Documents & Color Charts -->
    <div class="mb-12">
      <h2 class="text-2xl font-bold text-blue-800 mb-4 border-b border-gray-200 pb-1">Technical Documents & Color Charts</h2>
      <ul class="space-y-4">
        <?php
        $tech_files = [
          'ColorChart-2023.pdf',
          'Florida-Building-Code-2023.pdf',
          'STC-Fact-Sheet-9023.pdf'
        ];
        foreach ($tech_files as $file) {
          echo "<li class=\"flex items-center justify-between p-4 bg-gray-50 rounded shadow\">";
          echo "<span>" . basename($file) . "</span>";
          echo "<a href='" . get_template_directory_uri() . "/docs/$file' class=\"text-blue-600 font-semibold hover:underline\" download>Download</a>";
          echo "</li>";
        }
        ?>
      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>
