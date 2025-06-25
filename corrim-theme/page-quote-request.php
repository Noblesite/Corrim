<?php
/*
Template Name: Quote Request
*/

global $post;
get_header();
?>

<div class="max-w-3xl mx-auto px-4 py-12">
  <h1 class="text-3xl font-bold mb-6 text-center">Corrim Quotation Request</h1>

  <form id="quote-request-form" class="space-y-8">
    <!-- Contact Information -->
    <details open class="border border-gray-300 rounded p-4">
      <summary class="text-lg font-semibold cursor-pointer">Contact Information</summary>
      <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
        <input type="text" name="company" placeholder="Company Name" class="border p-3 rounded w-full">
        <input type="text" name="contact" placeholder="Contact Name" class="border p-3 rounded w-full">
        <input type="text" name="phone" placeholder="Phone Number" class="border p-3 rounded w-full">
        <input type="email" name="email" placeholder="Email Address" class="border p-3 rounded w-full">
      </div>
    </details>

    <!-- Project Details -->
    <details class="border border-gray-300 rounded p-4">
      <summary class="text-lg font-semibold cursor-pointer">Project Details</summary>
      <div class="mt-4 grid grid-cols-1 gap-4">
        <input type="text" name="project_name" placeholder="Project Name" class="border p-3 rounded w-full">
        <input type="text" name="location" placeholder="Project Location" class="border p-3 rounded w-full">
        <textarea name="comments" rows="4" placeholder="Additional Comments" class="border p-3 rounded w-full"></textarea>
      </div>
    </details>

    <!-- Door / Frame Configuration -->
    <details class="border border-gray-300 rounded p-4">
      <summary class="text-lg font-semibold cursor-pointer">Door / Frame Configuration</summary>
      <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
        <input type="text" name="opening_number" placeholder="Opening Number (e.g. 101A)" class="border p-3 rounded w-full">
        <input type="text" name="quantity" placeholder="Quantity (e.g. 2)" class="border p-3 rounded w-full">
        <select name="material" class="border p-3 rounded w-full">
          <option value="">Material Type</option>
          <option value="frp">FRP</option>
          <option value="wood_core">Wood Core</option>
          <option value="foam_core">Foam Core</option>
        </select>
        <select name="fire_rating" class="border p-3 rounded w-full">
          <option value="">Fire Rating</option>
          <option value="none">None</option>
          <option value="20min">20 Minutes</option>
          <option value="45min">45 Minutes</option>
          <option value="60min">60 Minutes</option>
          <option value="90min">90 Minutes</option>
        </select>
        <input type="text" name="width" placeholder="Door Width (e.g. 36")" class="border p-3 rounded w-full">
        <input type="text" name="height" placeholder="Door Height (e.g. 84")" class="border p-3 rounded w-full">
        <input type="text" name="thickness" placeholder="Thickness (e.g. 1-3/4")" class="border p-3 rounded w-full">
        <input type="text" name="frame_details" placeholder="Frame Details / Anchors / Depth" class="border p-3 rounded w-full">
        <input type="text" name="hardware_prep" placeholder="Hardware Prep (e.g. Hinge / Lock Type)" class="border p-3 rounded w-full">
      </div>
    </details>

    <!-- TODO: Implement server-side validation and error handling -->
    <!-- TODO: On form submission, send data via SMTP email -->
    <div class="text-center">
      <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow">
        Submit Request (POC)
      </button>
    </div>
  </form>
</div>

<?php get_footer(); ?>
