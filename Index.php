<?php
/**
 * index.php
 *
 * Default homepage template for the Funbrain Arcade Portfolio theme.
 * Loads the global header and footer, and displays the main welcome message.
 */

// 🧠 Load the header (header.php)
get_header(); ?>

<main>
  <!-- 🎲 Main welcome section for the portfolio homepage -->
  <h1>🎲 Welcome to Funbrain Arcade Portfolio!</h1>
  <p>This is your custom theme homepage.</p>
  
  <!-- 🎮 Begin arcade grid layout -->
  <div class="arcade-grid">
    <section class="tile tile-1">🎨 Project 1</section>
    <section class="tile tile-2">🕹️ Project 2</section>
    <section class="tile tile-3">📦 Project 3</section>
    <section class="tile tile-4">🚀 Project 4</section>
    <!-- Add more tiles as needed -->
</main>

<?php // 🧠 Load the footer (footer.php)

get_footer();
?>
