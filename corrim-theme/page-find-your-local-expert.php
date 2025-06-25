<?php
/* Template Name: Find Your Local Expert */
get_header();

$selected_state = $_GET['state'] ?? '';
$reps = json_decode(file_get_contents(get_template_directory() . '/site_assets/reps.json'), true);
?>

<section class="bg-white py-16 px-4 sm:px-6 lg:px-8">
  <div class="max-w-3xl mx-auto text-center mb-8">
    <h1 class="text-4xl font-extrabold text-gray-900">Find Your Local Expert</h1>
    <p class="text-lg text-gray-600 mt-4">
      Select your state to see Corrim’s local contact(s).
    </p>
  </div>

  <form method="GET" class="max-w-md mx-auto mb-12 text-center" id="state-form">
    <label for="state-selector" class="block text-sm font-medium text-gray-700 mb-1">Select a state</label>
        <select id="state-selector" name="state" class="w-full border border-gray-300 rounded-lg p-3 shadow-sm text-center"
            onchange="document.getElementById('state-form').submit();">

      <option value="">-- Select your state --</option>
      <?php
        $states = [
          "al" => "Alabama", "ak" => "Alaska", "az" => "Arizona", "ar" => "Arkansas",
          "ca" => "California", "co" => "Colorado", "ct" => "Connecticut", "de" => "Delaware",
          "fl" => "Florida", "ga" => "Georgia", "hi" => "Hawaii", "id" => "Idaho",
          "il" => "Illinois", "in" => "Indiana", "ia" => "Iowa", "ks" => "Kansas",
          "ky" => "Kentucky", "la" => "Louisiana", "me" => "Maine", "md" => "Maryland",
          "ma" => "Massachusetts", "mi" => "Michigan", "mn" => "Minnesota", "ms" => "Mississippi",
          "mo" => "Missouri", "mt" => "Montana", "ne" => "Nebraska", "nv" => "Nevada",
          "nh" => "New Hampshire", "nj" => "New Jersey", "nm" => "New Mexico", "ny" => "New York",
          "nc" => "North Carolina", "nd" => "North Dakota", "oh" => "Ohio", "ok" => "Oklahoma",
          "or" => "Oregon", "pa" => "Pennsylvania", "ri" => "Rhode Island", "sc" => "South Carolina",
          "sd" => "South Dakota", "tn" => "Tennessee", "tx" => "Texas", "ut" => "Utah",
          "vt" => "Vermont", "va" => "Virginia", "wa" => "Washington", "wv" => "West Virginia",
          "wi" => "Wisconsin", "wy" => "Wyoming"
        ];

        foreach ($states as $abbr => $name) {
          $selected = ($selected_state === $abbr) ? 'selected' : '';
          echo "<option value=\"$abbr\" $selected>$name</option>";
        }
      ?>
    </select>
  </form>

  <?php if ($selected_state && isset($reps[$selected_state])): ?>
    <div class="max-w-3xl mx-auto space-y-6">
      <?php foreach ($reps[$selected_state] as $rep): ?>
        <div class="border border-gray-300 rounded-lg p-6 bg-gray-50 shadow">
          <?php if (!empty($rep['region'])): ?>
            <h2 class="text-xl font-semibold text-gray-800"><?php echo esc_html($rep['region']); ?></h2>
          <?php endif; ?>
          <p class="text-gray-700">
            <?php echo esc_html($rep['firm'] ?? ''); ?><br>
            <?php echo esc_html($rep['rep'] ?? ''); ?><br>
            <?php echo esc_html($rep['address'] ?? ''); ?><br>
            <?php if (!empty($rep['phone'])): ?>📞 <?php echo esc_html($rep['phone']); ?><br><?php endif; ?>
            <?php if (!empty($rep['fax'])): ?>📠 <?php echo esc_html($rep['fax']); ?><br><?php endif; ?>
            <?php if (!empty($rep['email'])): ?>✉️ <a href="mailto:<?php echo esc_attr($rep['email']); ?>" class="text-blue-600 hover:underline"><?php echo esc_html($rep['email']); ?></a><br><?php endif; ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  <?php elseif ($selected_state): ?>
    <p class="text-center text-gray-500">No representative found for this state.</p>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
