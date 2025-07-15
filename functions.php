<?php
/**
 * functions.php
 *
 * Loads styles and scripts for the Funbrain Arcade Portfolio theme.
 * This file is automatically loaded by WordPress when the theme is active.
 */

/**
 * Enqueue theme styles and scripts
 *
 * - Loads the main stylesheet (style.css)
 * - Loads the JavaScript file for the mobile hamburger menu
 */
function funbrain_enqueue_assets()
{
    // 🎨 Load main theme stylesheet
    wp_enqueue_style(
        "funbrain-style", // Handle (name)
        get_stylesheet_uri() // Path to style.css
    );

    // 🍔 Load hamburger menu JS
    wp_enqueue_script(
        "funbrain-menu", // Handle (name)
        get_template_directory_uri() . "/js/menu.js", // Path to JS file
        [], // Dependencies (none)
        false, // Version (none)
        true // Load in footer
    );

    // 🍔 Load hamburger menu JS
    wp_enqueue_script(
        "funbrain-board", // Handle (name)
        get_template_directory_uri() . "/js/gameboard.js", // Path to JS file
        [], // Dependencies (none)
        false, // Version (none)
        true // Load in footer
    );

    // GSAP from CDN
    wp_enqueue_script("gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js", [], null, true);
}

// 🧠 Hook into WordPress: run our function when scripts should be loaded
add_action("wp_enqueue_scripts", "funbrain_enqueue_assets");
