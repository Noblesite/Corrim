<?php
/* Template Name: Order Form */
get_header();
?>

<main class="quote-form container">
  <div class="form-container mx-auto max-w-4xl px-4">
    <h1 class="text-3xl font-bold mb-6">Corrim Order Form</h1>

    <form id="order-form" method="post" class="space-y-8">

      <!-- Order Info -->
      <section>
        <h2>
          <button type="button" onclick="this.nextElementSibling.classList.toggle('hidden')" class="font-semibold text-xl">Order Info</button>
        </h2>
        <div class="mt-2 space-y-4">
          <label class="block">PO #
            <input type="text" name="po_number" placeholder="Enter Purchase Order Number" class="input w-full">
          </label>
          <label class="block">Door Number
            <input type="text" name="door_number" placeholder="Door #" class="input w-full">
          </label>
        </div>
      </section>

      <!-- Door Details -->
      <section>
        <h2>
          <button type="button" onclick="this.nextElementSibling.classList.toggle('hidden')" class="font-semibold text-xl">Door Details</button>
        </h2>
        <div class="mt-2 space-y-4">
          <label class="block">Door Size
            <input type="text" name="door_size" placeholder="36 x 84" class="input w-full">
          </label>
          <label class="block">Core
            <select name="core" class="input w-full">
              <option>KRAFT HC</option>
              <option>PLASTIC HC</option>
              <option>FOAM</option>
              <option>BALSA</option>
              <option>MINERAL</option>
            </select>
          </label>
          <label class="block">Face Sheet
            <select name="face_sheet" class="input w-full">
              <option>SMOOTH</option>
              <option>PEBBLE</option>
            </select>
          </label>
          <label class="block">Finish
            <select name="finish" class="input w-full">
              <option>FLAT</option>
              <option>SEMI-GLOSS</option>
              <option>GLOSS</option>
            </select>
          </label>
          <label class="block">Thickness
            <input type="text" name="thickness" placeholder="1-3/4" class="input w-full">
          </label>
          <label class="block">Color
            <input type="text" name="color" placeholder="Specify Color" class="input w-full">
          </label>
        </div>
      </section>

      <!-- Frame Info -->
      <section>
        <h2>
          <button type="button" onclick="this.nextElementSibling.classList.toggle('hidden')" class="font-semibold text-xl">Frame Info</button>
        </h2>
        <div class="mt-2 space-y-4">
          <label class="block">Opening Size
            <input type="text" name="opening_size" placeholder="Width x Height" class="input w-full">
          </label>
          <label class="block">Inside Frame
            <input type="text" name="inside_frame" placeholder="Details" class="input w-full">
          </label>
          <label class="block">Frame by Corrim
            <select name="frame_by_corrim" class="input w-full">
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </label>
          <label class="block">Modified Frame
            <input type="text" name="modified_frame" placeholder="e.g., 4\" head" class="input w-full">
          </label>
        </div>
      </section>

      <!-- Hardware & Configuration -->
      <section>
        <h2>
          <button type="button" onclick="this.nextElementSibling.classList.toggle('hidden')" class="font-semibold text-xl">Hardware & Configuration</button>
        </h2>
        <div class="mt-2 space-y-4">
          <label class="block">Hinge Size
            <input type="text" name="hinge_size" placeholder="4-1/2 or 5" class="input w-full">
          </label>
          <label class="block">Lock Backset
            <input type="text" name="lock_backset" placeholder="e.g., 2-3/4" class="input w-full">
          </label>
          <label class="block">Strike Size
            <input type="text" name="strike_size" placeholder="e.g., STD 5 3/4 x 2" class="input w-full">
          </label>
          <label class="block">Handing
            <input type="text" name="handing" placeholder="e.g., Left/Right" class="input w-full">
          </label>
          <label class="block">Flush Bolts
            <input type="text" name="flush_bolts" placeholder="Yes/No" class="input w-full">
          </label>
          <label class="block">Closer Blocking
            <input type="text" name="closer_blocking" placeholder="Yes (standard)" class="input w-full">
          </label>
        </div>
      </section>

      <!-- Lites & Louvers -->
      <section>
        <h2>
          <button type="button" onclick="this.nextElementSibling.classList.toggle('hidden')" class="font-semibold text-xl">Lites & Louvers</button>
        </h2>
        <div class="mt-2 space-y-4">
          <label class="block">Glass Type
            <input type="text" name="glass_type" placeholder="Tempered, FireLite, etc." class="input w-full">
          </label>
          <label class="block">Glass Thickness
            <input type="text" name="glass_thickness" placeholder="e.g., 1/4" class="input w-full">
          </label>
          <label class="block">Factory Install Glass
            <select name="factory_glass" class="input w-full">
              <option>Yes</option>
              <option>No</option>
            </select>
          </label>
          <label class="block">Visible Louver
            <select name="visible_louver" class="input w-full">
              <option>Yes</option>
              <option>No</option>
            </select>
          </label>
        </div>
      </section>

      <!-- Additional -->
      <section>
        <h2>
          <button type="button" onclick="this.nextElementSibling.classList.toggle('hidden')" class="font-semibold text-xl">Additional</button>
        </h2>
        <div class="mt-2 space-y-4">
          <label class="block">Wall Material
            <select name="wall_material" class="input w-full">
              <option>Masonry</option>
              <option>Wood</option>
              <option>Steel</option>
            </select>
          </label>
          <label class="block">Anchor Type
            <input type="text" name="anchor_type" placeholder="Specify Anchor" class="input w-full">
          </label>
          <label class="block">Other Remarks
            <textarea name="remarks" placeholder="Additional instructions or requests..." class="input w-full h-32"></textarea>
          </label>
        </div>
      </section>

      <!-- TODO: Add SMTP integration in production -->

      <div class="pt-6">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Submit Order Request</button>
      </div>
    </form>
  </div>
</main>

<?php get_footer(); ?>
