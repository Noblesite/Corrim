<footer class="bg-gray-900 text-gray-300 py-10 mt-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid gap-8 sm:grid-cols-2 lg:grid-cols-4 text-sm">

    <!-- Company -->
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/site_assets/corrim_40_year_logo.png" alt="Corrim Logo" class="h-10 mb-4">
      <p>
        Corrim Company, LLC<br>
        2121 South Commercial Street<br>
        Neenah, WI 54956
      </p>
      <p class="mt-2">
        <a href="tel:9202312000" class="hover:underline">Phone: (920) 231-2000</a><br>
        <a href="mailto:info@corrim.com" class="hover:underline">info@corrim.com</a>
      </p>
    </div>

    <!-- Quick Links -->
    <div>
      <h4 class="text-white font-semibold mb-3">Quick Links</h4>
      <ul class="space-y-2">
        <li><a href="/about" class="hover:underline">About Corrim</a></li>
        <li><a href="/products" class="hover:underline">Products</a></li>
        <li><a href="/our-work" class="hover:underline">Our Work</a></li>
        <li><a href="/resources" class="hover:underline">Resources</a></li>
        <li><a href="/contact" class="hover:underline">Contact</a></li>
      </ul>
    </div>

    <!-- Forms & Support -->
    <div>
      <h4 class="text-white font-semibold mb-3">Downloads</h4>
      <ul class="space-y-2">
        <li><a href="/resources/order-forms" class="hover:underline">Order Forms</a></li>
        <li><a href="/resources/color-charts" class="hover:underline">Color Charts</a></li>
        <li><a href="/resources/installation-guides" class="hover:underline">Installation Guides</a></li>
        <li><a href="/resources/technical" class="hover:underline">Specifications</a></li>
      </ul>
    </div>

    <!-- Legal / Notes -->
    <div>
      <h4 class="text-white font-semibold mb-3">Certifications</h4>
      <p>
        • ANSI/SDI<br>
        • Fire-rated options<br>
        • Sound Transmission Ratings<br>
        • Custom core options
      </p>
    </div>

  </div>

  <div class="border-t border-gray-700 mt-10 pt-6 text-center text-xs text-gray-500">
    &copy; <?php echo date('Y'); ?> Corrim Company, LLC. All rights reserved. Site Built in-house by family — just like our doors.
  </div>

  <?php wp_footer(); ?>
</footer>
</body>
</html>
