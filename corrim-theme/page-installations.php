<?php
/* Template Name: Installations */
get_header();

// Path to the installations folder (relative to theme root)
$installations_dir = get_template_directory() . '/site_assets/installations/';
$installations_url = get_template_directory_uri() . '/site_assets/installations/';

// Acceptable image types
$allowed_ext = ['jpg', 'jpeg', 'png', 'webp', 'gif'];

// Scan the folder and collect image files
$images = [];
if (is_dir($installations_dir)) {
  foreach (scandir($installations_dir) as $file) {
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if (in_array(strtolower($ext), $allowed_ext)) {
      $images[] = $installations_url . '/' . $file;
    }
  }
}
?>

<main class="py-16 px-4">
  <div class="max-w-6xl mx-auto text-center">
    <h1 class="text-4xl font-bold mb-4">Corrim Door Installations</h1>
    <p class="text-gray-600 mb-12">Browse recent examples of Corrim doors in the field.</p>

    <?php if (!empty($images)): ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php foreach ($images as $img): ?>
          <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
            <img src="<?php echo esc_url($img); ?>" alt="Corrim Installation" class="w-full h-auto object-cover">
          </div>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <p class="text-gray-500">No installation images found. Please check the folder.</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
