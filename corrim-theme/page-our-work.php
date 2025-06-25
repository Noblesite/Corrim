<?php
/* Template Name: Our Work */
get_header(); ?>

<section class="bg-white py-16 px-4 sm:px-6 lg:px-8">
  <div class="max-w-5xl mx-auto text-center mb-12">
    <h1 class="text-4xl font-extrabold text-gray-900">Our Work</h1>
    
    <p class="mt-4 text-lg text-gray-700">
      For over 40 years, Corrim has delivered corrosion-immune fiberglass doors and frames to facilities nationwide — from hospitals and schools to clean rooms, food processing plants, and aquatic centers.
    </p>

    <!-- Logo Row -->
    <div class="mt-10 mb-16">
      <h2 class="text-lg font-semibold text-gray-600 text-center mb-6 uppercase tracking-widest">Trusted by Industry Leaders</h2>
      <div class="flex flex-wrap justify-center items-center gap-6 md:gap-10">
        <img src="<?php echo get_template_directory_uri(); ?>/site_assets/logos/frito-lay.jpg" alt="Frito-Lay" class="h-10">
        <img src="<?php echo get_template_directory_uri(); ?>/site_assets/logos/Pfizer.jpg" alt="Pfizer" class="h-10">
        <img src="<?php echo get_template_directory_uri(); ?>/site_assets/logos/Pepsi.jpg" alt="Pepsi" class="h-10">
        <img src="<?php echo get_template_directory_uri(); ?>/site_assets/logos/Chobani.jpg" alt="Chobani" class="h-10">
        <img src="<?php echo get_template_directory_uri(); ?>/site_assets/logos/merck.jpg" alt="Merck" class="h-10">
        <img src="<?php echo get_template_directory_uri(); ?>/site_assets/logos/temple.jpg" alt="Temple University" class="h-10">
      </div>
    </div>

    <p class="mt-2 text-gray-600">
      Below are just a few of the industries and clients who trust Corrim systems every day.
    </p>
  </div>

  <div class="max-w-6xl mx-auto space-y-12">
    
    <!-- Food Processing -->
    <div>
      <h2 class="text-2xl font-bold text-blue-800 mb-4 border-b border-gray-200 pb-1">Food Processing Facilities</h2>
      <ul class="grid gap-2 sm:grid-cols-2 text-gray-700 text-sm list-disc pl-6">
        <li>Frito-Lay</li>
        <li>Tropicana</li>
        <li>Oscar Mayer</li>
        <li>Coca-Cola</li>
        <li>Perdue Farms</li>
        <li>Dean Foods</li>
        <li>Chobani</li>
        <li>PepsiCo</li>
        <li>Land-O-Lakes</li>
        <li>Kraft Foods</li>
      </ul>
    </div>

    <!-- Clean Rooms & Pharma -->
    <div>
      <h2 class="text-2xl font-bold text-blue-800 mb-4 border-b border-gray-200 pb-1">Pharmaceuticals & Clean Rooms</h2>
      <ul class="grid gap-2 sm:grid-cols-2 text-gray-700 text-sm list-disc pl-6">
        <li>Pfizer</li>
        <li>Merck</li>
        <li>Roche</li>
        <li>Amgen</li>
        <li>Allergan</li>
        <li>Bristol Myers Squibb</li>
        <li>Genentech</li>
        <li>Schering-Plough</li>
        <li>Wyeth Ayerst</li>
      </ul>
    </div>

    <!-- Aquatic & Pool Centers -->
    <div>
      <h2 class="text-2xl font-bold text-blue-800 mb-4 border-b border-gray-200 pb-1">Pools & Aquatic Facilities</h2>
      <ul class="grid gap-2 sm:grid-cols-2 text-gray-700 text-sm list-disc pl-6">
        <li>University of Minnesota Natatorium</li>
        <li>Texas A&M Aquatic Center</li>
        <li>Cuyahoga Falls Natatorium</li>
        <li>Panama City Marina</li>
        <li>Raleigh Aquatics Center</li>
        <li>Steele Hall Boathouse</li>
      </ul>
    </div>

    <!-- Labs & Education -->
    <div>
      <h2 class="text-2xl font-bold text-blue-800 mb-4 border-b border-gray-200 pb-1">Universities & Schools</h2>
      <ul class="grid gap-2 sm:grid-cols-2 text-gray-700 text-sm list-disc pl-6">
        <li>Ball State University</li>
        <li>University of Michigan</li>
        <li>Tufts University</li>
        <li>Temple University</li>
        <li>North Dakota State University</li>
        <li>University of California</li>
      </ul>
    </div>

    <!-- Download PDF -->
    <div class="text-center mt-12">
      <a href="<?php echo get_template_directory_uri(); ?>/docs/Corrim-Project-Listings.pdf" class="inline-block bg-blue-700 text-white px-6 py-3 font-semibold rounded-lg shadow hover:bg-blue-800 transition" target="_blank">
        Download Full Project Listing PDF
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
