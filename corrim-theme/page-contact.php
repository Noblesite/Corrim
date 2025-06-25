<?php
/* Template Name: Contact */
get_header(); ?>

<section class="bg-white py-16 px-4 sm:px-6 lg:px-8">
  <div class="max-w-3xl mx-auto text-center">
    <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Contact Us</h1>
    <p class="text-lg text-gray-600 mb-8">
      Have a question about our doors, need a quote, or want to discuss a custom solution? Get in touch with us today.
    </p>
  </div>

  <div class="max-w-3xl mx-auto space-y-10">
    <div class="space-y-6">
      <div>
        <h2 class="text-lg font-semibold text-gray-800">Mailing Address</h2>
        <p class="text-gray-600">
          Corrim Company, LLC<br>
          1870 Stillman Dr<br>
          Oshkosh, WI 54901, USA
        </p>
      </div>

      <div>
        <h2 class="text-lg font-semibold text-gray-800">Contact Information</h2>
        <p class="text-gray-600">
          Phone: <a href="tel:414-764-9250" class="text-blue-600 hover:underline">(414) 764-9250</a><br>
          Email: <a href="mailto:info@corrim.com" class="text-blue-600 hover:underline">info@corrim.com</a>
        </p>
      </div>

      <div>
        <h2 class="text-lg font-semibold text-gray-800">Business Hours</h2>
        <p class="text-gray-600">Monday – Friday: 8:00 AM – 4:30 PM (CST)</p>
      </div>
    </div>

    <div>
      <form action="#" method="POST" class="space-y-6">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
          <input type="text" id="name" name="name" required placeholder="Your full name" class="block w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" id="email" name="email" required placeholder="you@example.com" class="block w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
          <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
          <textarea id="message" name="message" rows="4" required placeholder="Tell us a bit about your project or request" class="block w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-blue-500 focus:border-blue-500"></textarea>
        </div>

        <div class="text-right pt-2">
          <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded-md font-semibold hover:bg-blue-800 transition">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>
