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
    <!-- 🧠 Set character encoding for the document -->
    <meta charset="<?php bloginfo("charset"); ?>">

    <!-- 📱 Responsive meta: ensures proper scaling on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 📛 Dynamic WordPress page title -->
    <title><?php bloginfo("name"); ?></title>

    <!-- 🎯 WordPress hook: inserts required styles and meta tags -->
    <?php wp_head(); ?>
</head>

<!-- 🎯 WordPress body hook: adds helpful body classes for styling and state -->
<body <?php body_class(); ?>>

    <!-- 🎮 Main site header: includes logo and navigation -->
    <header class="funbrain-header">

        <!-- 🔗 Logo area: switches for desktop/mobile -->
        <div class="logo">
            <!-- 🖥️ Desktop logo shown on large screens -->
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/Logo-3.png"
                alt="BiscuittLabs Logo"
                class="logo-desktop">

            <!-- 📱 Mobile logo shown on small screens -->
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/Logo-8.png"
                alt="BiscuittLabs Mobile Logo"
                class="logo-mobile">
        </div>

        <!-- 🍔 Hamburger button: toggles navigation menu on mobile -->
        <button class="hamburger" id="hamburger" aria-label="Toggle navigation">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <!-- 🧭 Navigation menu: links to important pages -->
        <nav class="main-nav" id="mainNav">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

    </header>
