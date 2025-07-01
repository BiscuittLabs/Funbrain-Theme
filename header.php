<?php
/**
 * header.php
 *
 * Global site header for Funbrain Arcade Portfolio.
 * Contains DOCTYPE, head meta info, opening body tag, and the site navigation bar.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- 🧠 Set the character encoding -->
  <meta charset="<?php bloginfo("charset"); ?>">

  <!-- 📱 Make the layout responsive on mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 📛 Page title pulled dynamically from WordPress settings -->
  <title><?php bloginfo("name"); ?></title>

  <!-- 🎯 WordPress hook: inserts necessary styles, scripts, meta -->
  <?php wp_head(); ?>
</head>

<!-- 🎯 WordPress body hook: adds classes for body state, useful for styling -->
<body <?php body_class(); ?>>

<!-- 🎮 Site header: logo + navigation bar -->
<header class="funbrain-header">

  <!-- 🔗 Site logo -->
  <div class="logo">
    <!-- 🖥️ Desktop Logo -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/Logo-3.png"
       alt="BiscuittLabs Logo"
       class="logo-desktop">

  <!-- 📱 Mobile Logo -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/Logo-8.png"
       alt="BiscuittLabs Mobile Logo"
       class="logo-mobile">
  </div>

  <!-- 🍔 Mobile hamburger button -->
  <button class="hamburger" id="hamburger" aria-label="Toggle navigation">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </button>

  <!-- 🧭 Navigation menu -->
  <nav class="main-nav" id="mainNav">
    <ul>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

</header>
